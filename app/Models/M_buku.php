<?php

namespace App\Models;

use CodeIgniter\Model;

class M_buku extends model
{
    // tampil
    protected $table = 'buku';
    public function data_buku($id_buku = false)
    {
        if ($id_buku === false) {
            return $this->db->table($this->table)
                ->join('kategori', 'kategori.id_kategori=buku.id_kategori')
                ->join('pengarang', 'pengarang.id_pengarang=buku.id_pengarang')
                ->join('penerbit', 'penerbit.id_penerbit=buku.id_penerbit')->get()->getResultArray();
        }
        return $this->db->table($this->table)
                ->join('kategori', 'kategori.id_kategori=buku.id_kategori')
               ->join('pengarang', 'pengarang.id_pengarang=buku.id_pengarang')
                ->join('penerbit', 'penerbit.id_penerbit=buku.id_penerbit')
                ->getwhere(['id_buku' => $id_buku]);
    }

    // simpan
    public function simpan($data)
    {
        $build = $this->db->table($this->table);
        return $build->insert($data);
    }
    // ubah
    public function ubah_buku($data, $id_buku)
    {
        $build = $this->db->table($this->table);
        $build->where('id_buku', $id_buku);
        return $build->update($data);
    }

    // hapus
    public function hapus($id_buku)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_buku' => $id_buku]);
    }
}
