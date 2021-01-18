<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pengarang extends model
{
    // tampil
    protected $table = 'pengarang';
    public function data_pengarang($id_pengarang = false)
    {
        if ($id_pengarang === false) {
            return $this->findAll();
        }
        return $this->getwhere(['id_pengarang' => $id_pengarang]);
    }
    //simpan
    public function simpan($data)
    {
        $build = $this->db->table($this->table);
        return $build->insert($data);
    }
    // ubah
    public function ubah_pengarang($data, $id_pengarang)
    {
        $build = $this->db->table($this->table);
        $build->where('id_pengarang', $id_pengarang);
        return $build->update($data);
    }
    // hapus
    public function hapus($id_pengarang)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_pengarang' => $id_pengarang]);
    }
}
