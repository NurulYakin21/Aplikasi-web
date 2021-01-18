<?php

namespace App\Models;

use CodeIgniter\model;

class M_penerbit extends model
{
    // tampil
    protected $table = 'penerbit';
    public function data_penerbit($id_penerbit = false)
    {
        if ($id_penerbit === false) {
            return $this->findAll();
        }
        return $this->getwhere(['id_penerbit' => $id_penerbit]);
    }
    // simpan
    public function simpan($data)
    {
        $build = $this->db->table($this->table);
        return $build->insert($data);
    }
    // ubah
    public function ubah_penerbit($data, $id_penerbit)
    {
        $build = $this->db->table($this->table);
        $build->where('id_penerbit', $id_penerbit);
        return $build->update($data);
    }
    // hapus
    public function hapus($id_penerbit)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_penerbit' => $id_penerbit]);
    }
}
