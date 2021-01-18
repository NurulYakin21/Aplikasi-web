<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends model
{
    // tampil
    protected $table = 'user';
    public function data_user($id_user = false)
    {
        if ($id_user === false) {
            return $this->findAll();
        }
        return $this->getwhere(['id_user' => $id_user]);
    }
    // simpan
    public function simpan($data)
    {
        $build = $this->db->table($this->table);
        return $build->insert($data);
    }
    // hapus
    public function hapus($id_user)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_user' => $id_user]);
    }
}
