<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends model
{
    public function login_aksi($email, $password)
    {
        return $this->db->table('user')
            ->where(array('email' => $email, 'password' => $password))->get()->getRowArray();
    }
}
