<?php

namespace App\Controllers;

use App\Models\M_user;

class User extends BaseController
{

    public function user()
    {
        $model = new M_user;
        $data = [
            'getuser' => $model->data_user()
        ];
        return view('page/v_user', $data);
    }

    // form Tambah User
    public function form_user()
    {
        return view('page/v_f_registrasi');
    }
    // form aksi tambah user
    public function form_aksi()
    {
        $model = new M_user;
        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            $namafoto = 'default.jpg';
        } else {
            $namafoto = $foto->getRandomName();
            $foto->move('user', $namafoto);
        }
        $model->simpan([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'foto' => $namafoto
        ]);
        return redirect()->to('/Login/user');
    }

    // hapus user
    public function hapus_user($id_user)
    {
        $model = new M_user;

        $foto = $model->data_user($id_user)->getRow();
        if ($foto->foto != 'default.jpg') {
            unlink('user/' . $foto->foto);
        }
        $model->hapus($id_user);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Login/user');
    }
}
