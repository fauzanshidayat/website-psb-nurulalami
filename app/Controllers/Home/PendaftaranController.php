<?php

namespace App\Controllers\Home;

use App\Models\PendaftaranModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class PendaftaranController extends BaseController
{
    protected $pendaftaranModel;

    public function __construct()
    {
        $this->pendaftaranModel = new PendaftaranModel();
    }
    public function index()
    {
        return view('front-end/home');
    }

    public function store()
    {
        // VALIDASI
        $validation = \Config\Services::validation();

        $rules = [
            'nama_lengkap'  => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'jenjang'       => 'required',
            'asal_sekolah'  => 'required',
            'nama_ortu'     => 'required',
            'no_hp'         => 'required',

            'photo_kk'      => 'uploaded[photo_kk]|max_size[photo_kk,2048]|is_image[photo_kk]',
            'photo_akte'    => 'uploaded[photo_akte]|max_size[photo_akte,2048]|is_image[photo_akte]',
            'photo_ijazah'  => 'max_size[photo_ijazah,2048]|is_image[photo_ijazah]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // UPLOAD FILES
        $kk   = $this->request->getFile('photo_kk');
        $akte = $this->request->getFile('photo_akte');
        $ijazah = $this->request->getFile('photo_ijazah');

        $kkName     = $kk->getRandomName();
        $akteName   = $akte->getRandomName();
        $ijazahName = $ijazah && $ijazah->isValid() ? $ijazah->getRandomName() : null;

        $kk->move('uploads/kk', $kkName);
        $akte->move('uploads/akte', $akteName);
        if ($ijazahName) {
            $ijazah->move('uploads/ijazah', $ijazahName);
        }

        // SIMPAN KE DATABASE
        $this->pendaftaranModel->save([
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenjang'       => $this->request->getPost('jenjang'),
            'asal_sekolah'  => $this->request->getPost('asal_sekolah'),
            'nama_ortu'     => $this->request->getPost('nama_ortu'),
            'no_hp'         => $this->request->getPost('no_hp'),

            'photo_kk'      => $kkName,
            'photo_akte'    => $akteName,
            'photo_ijazah'  => $ijazahName,
        ]);

        return redirect()->back()->with('message', 'Pendaftaran berhasil');
    }
}
