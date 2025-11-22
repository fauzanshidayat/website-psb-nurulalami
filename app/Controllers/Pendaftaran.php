<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pendaftaran extends BaseController
{
    public function index()
    {
        return view('front-end/pendaftaran', [
            'title' => 'Formulir Pendaftaran'
        ]);
    }

    public function simpan()
    {
        // Contoh logika simpan data
        $data = $this->request->getPost();

        // TODO: Simpan ke database
        // Misalnya pakai model SiswaModel

        return redirect()->to('/pendaftaran')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
