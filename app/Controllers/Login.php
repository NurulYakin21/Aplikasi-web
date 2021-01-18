<?php

namespace App\Controllers;

use App\Models\M_login;

class Login extends BaseController
{
    public function index()
    {
        return view('page/v_login');
    }

    public function login_aksi()
    {
        $model = new M_login;
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $cek = $model->login_aksi($email, $password);
        if ($cek) {
            session()->set('nama', $cek['nama']);
            return redirect()->to('/page');
        } else {
            session()->setFlashdata('gagal', 'Email atau Password anda salah');
            return redirect()->to('/login');
        }
    }

    public function login_user()
    {
        return view('/page/v_login_user');
    }

    public function login_user_aksi()
    {
        $model = new M_login;
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $cek = $model->login_aksi($email, $password);
        if ($cek) {
            session()->set('nama', $cek['nama']);
            return redirect()->to('/page/halaman_user');
        } else {
            session()->setFlashdata('gagal', 'Email atau Password anda salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
