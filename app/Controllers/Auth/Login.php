<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('back-end/auth/login');
    }

    public function login()
    {

        $userModel = new UserModel();

        $validation = \Config\Services::validation();

        $rules = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[3]'
        ];

        // custom message
        $messages = [
            'username' => [
                'required' => 'Username wajib diisi.',
                'min_length' => 'Username minimal 3 karakter.'
            ],
            'password' => [
                'required' => 'Password wajib diisi.',
                'min_length' => 'Password minimal 3 karakter.'
            ]
        ];

        // cek validasi
        if (! $this->validate($rules, $messages)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Username Tidak Ditemukan');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Username Tidak Ditemukan');
        }

        session()->set([
            'logged_in' => true,
            'username' => $user['username'],
            'user_id' => $user['id']
        ]);

        return redirect()->to('/dashboard');
    }

    public function logout()
    {

        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
