<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kategori extends model
{
    // tampil
    protected $table = 'kategori';
    public function data_kategori($id_kategori = false)
    {
        if ($id_kategori === false) {
            return $this->findAll();
        }
        return $this->getwhere(['id_kategori' => $id_kategori]);
    }

    // simpan
    public function simpan($data)
    {
        $build = $this->db->table($this->table);
        return $build->insert($data);
    }

    // ubah
    public function ubah_kategori($data, $id_kategori)
    {
        $build = $this->db->table($this->table);
        $build->where('id_kategori', $id_kategori);
        return $build->update($data);
    }

    // hapus
    public function hapus($id_kategori)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_kategori' => $id_kategori]);
    }
}
