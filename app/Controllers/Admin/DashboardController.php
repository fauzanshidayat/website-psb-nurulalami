<?php

namespace App\Controllers\Admin;

use App\Models\PendaftaranModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $pendaftaranModel = new PendaftaranModel();

        // Ambil data berdasarkan jenjang
        $data['ra']  = $pendaftaranModel->where('jenjang', 'RA')->findAll();
        $data['mts'] = $pendaftaranModel->where('jenjang', 'MTs')->findAll();
        $data['ma']  = $pendaftaranModel->where('jenjang', 'MA')->findAll();

        // Contoh kalau kamu cuma mau jumlahnya saja
        $data['count_ra']  = count($data['ra']);
        $data['count_mts'] = count($data['mts']);
        $data['count_ma']  = count($data['ma']);

        return view('back-end/admin/dashboard', $data);
    }
}
