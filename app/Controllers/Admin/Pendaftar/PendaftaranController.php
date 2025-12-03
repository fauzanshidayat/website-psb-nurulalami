<?php

namespace App\Controllers\Admin\Pendaftar;

use App\Controllers\BaseController;
use App\Models\PendaftaranModel;
use CodeIgniter\HTTP\ResponseInterface;

class PendaftaranController extends BaseController
{
    public function index()
    {
        $dataPendaftaran = new PendaftaranModel();
        $data['pendaftar'] = $dataPendaftaran->findAll();
        return view('back-end/admin/pendaftaran/index', $data);
    }

    public function detail($id)
    {
        $pendaftaranModel = new PendaftaranModel();

        // Ambil data berdasarkan id
        $data['pendaftar'] = $pendaftaranModel->find($id);

        // Jika data tidak ada, redirect atau tampil error
        if (!$data['pendaftar']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Pendaftar tidak ditemukan.');
        }

        return view('back-end/admin/pendaftaran/detail', $data);
    }

    public function delete($id)
    {
        $pendaftaranModel = new \App\Models\PendaftaranModel();

        // Ambil data dulu supaya tahu nama file yang akan dihapus
        $pendaftar = $pendaftaranModel->find($id);

        if (!$pendaftar) {
            // Kalau data tidak ada
            return redirect()->to('/dashboard/pendaftar')->with('error', 'Data pendaftar tidak ditemukan.');
        }

        // Hapus file dari server jika ada
        if ($pendaftar['photo_akte'] && file_exists(WRITEPATH . '../public/uploads/akte/' . $pendaftar['photo_akte'])) {
            unlink(WRITEPATH . '../public/uploads/akte/' . $pendaftar['photo_akte']);
        }

        if ($pendaftar['photo_kk'] && file_exists(WRITEPATH . '../public/uploads/kk/' . $pendaftar['photo_kk'])) {
            unlink(WRITEPATH . '../public/uploads/kk/' . $pendaftar['photo_kk']);
        }

        if ($pendaftar['photo_ijazah'] && file_exists(WRITEPATH . '../public/uploads/ijazah/' . $pendaftar['photo_ijazah'])) {
            unlink(WRITEPATH . '../public/uploads/ijazah/' . $pendaftar['photo_ijazah']);
        }

        // Hapus data dari database
        $pendaftaranModel->delete($id);

        // Redirect dengan flash message
        return redirect()->to('/dashboard/pendaftar')->with('message', 'Data pendaftar berhasil dihapus.');
    }
}
