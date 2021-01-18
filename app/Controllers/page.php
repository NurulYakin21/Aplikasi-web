<?php

namespace App\Controllers;

use App\Models\M_buku;
use App\Models\M_kategori;
use App\Models\M_pengarang;
use App\Models\M_penerbit;

class Page extends BaseController
{

    public function index()
    {
        return view('page/v_home');
    }

    public function halaman_user()
    {
        $model = new M_buku;
        $data=[
            'getbuku'=> $model->data_buku()
        ];
        return view('pelanggan/v_home', $data);
    }

    // tampil buku
    public function buku()
    {
        $model = new M_buku;
        $data = [
            'getbuku' => $model->data_buku()
        ];
        return view('page/v_buku', $data);
    }

    // detail buku
    public function detail_buku($id_buku)
    {
        $model = new M_buku;
        $data=[
            'getdetail'=> $model->data_buku($id_buku)->getRow()
        ];
        return view('page/v_detail_buku', $data);
    }

    public function detail_buku_user($id_buku)
    {
        $model = new M_buku;
        $data=[
            'getdetail'=> $model->data_buku($id_buku)->getRow()
        ];
        return view('pelanggan/v_detail_buku', $data);
    }

    // tambah buku
    public function tambah_buku()
    {
        $model1 = new M_kategori;
        $model2 = new M_pengarang;
        $model3 = new M_penerbit;
        $data = [
            'getkategori' => $model1->data_kategori(),
            'getpengarang' => $model2->data_pengarang(),
            'getpenerbit' => $model3->data_penerbit()
        ];

        return view('page/tambah/v_t_buku', $data);
    }
    // aksi tambah buku
    public function tambah_buku_aksi()
    {
        $model = new M_buku;
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $namagambar = 'default.jpg';
        } else {
            $namagambar = $gambar->getRandomName();
            $gambar->move('upload', $namagambar);
        }
        $model->simpan([
            'id_kategori' => $this->request->getVar('nama_kategori'),
            'judul' => $this->request->getvar('judul_buku'),
            'id_pengarang' => $this->request->getVar('nama_pengarang'),
            'id_penerbit' => $this->request->getVar('nama_penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namagambar
        ]);
        return redirect()->to('/page/buku');
    }

    // ubah buku
    public function ubah_buku($id_buku)
    {
       $model1= new M_kategori;
        $model2 = new M_pengarang;
        $model3 = new M_penerbit;
        $model4 = new M_buku;
        $data = [
            'getkategori' => $model1->data_kategori(),
            'getpengarang' => $model2->data_pengarang(),
            'getpenerbit' => $model3->data_penerbit(),
            'getbuku' => $model4->data_buku($id_buku)->getRow()
        ];
        return view('page/ubah/v_u_buku', $data);
    }
    // aksi ubah buku
    public function ubah_buku_aksi()
    {
        $model = new M_buku;
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $namagambar = 'default.jpg';
        } else {
            $namagambar = $gambar->getRandomName();
            $gambar->move('upload', $namagambar);
        }
        $idbuku = $this->request->getVar('id_buku');
        $model->ubah_buku([
            'id_kategori' => $this->request->getVar('nama_kategori'),
            'judul' => $this->request->getVar('judul_buku'),
            'id_pengarang' => $this->request->getVar('nama_pengarang'),
            'id_penerbit' => $this->request->getVar('nama_penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namagambar
        ], $idbuku);
        return redirect()->to('/page/buku');
    }

    // hapus buku
    public function hapus($id_buku)
    {
        $model = new M_buku;

        $gambar = $model->data_buku($id_buku)->getRow();
        if ($gambar->gambar != 'default.jpg') {
            unlink('upload/' . $gambar->gambar);
        }
        $model->hapus($id_buku);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/page/buku');
    }

    // tampil kategori
    public function kategori()
    {
        $model = new M_kategori;
        $data = [
            'getkategori' => $model->data_kategori()
        ];
        return view('page/v_kategori', $data);
    }

    // tambah kategori
    public function tambah_kategori()
    {
        return view('page/tambah/v_t_kategori');
    }
    // aksi tambah kategori
    public function tambah_kategori_aksi()
    {
        $model = new M_kategori;
        $model->simpan([
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ]);
        return redirect()->to('/page/kategori');
    }

    // ubah kateori
    public function ubah_kategori($id_kategori)
    {
        $model = new M_kategori;
        $data = [
            'getkategori' => $model->data_kategori($id_kategori)->getRow()
        ];
        return view('page/ubah/v_u_kategori', $data);
    }
    // aksi ubah kategori
    public function ubah_aksi_kategori()
    {
        $model = new M_kategori;
        $idkategori = $this->request->getVar('id_kategori');
        $model->ubah_kategori([
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ], $idkategori);
        return redirect()->to('/page/kategori');
    }

    // hapus kategori
    public function hapus_kategori($id_kategori)
    {
        $model = new M_kategori;
        $model->hapus($id_kategori);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/page/kategori');
    }

    // tampil pengarang
    public function pengarang()
    {
        $model = new M_pengarang;
        $data = [
            'getpengarang' => $model->data_pengarang()
        ];
        return view('page/v_pengarang', $data);
    }

    // tambah pengarang
    public function tambah_pengarang()
    {
        return view('page/tambah/v_t_pengarang');
    }
    // aksi tambah pengarang
    public function tambah_pengarang_aksi()
    {
        $model = new M_pengarang;
        $model->simpan([
            'nama_pengarang' => $this->request->getVar('nama_pengarang'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp')
        ]);
        return redirect()->to('/page/pengarang');
    }

    // ubah  pengarang
    public function ubah_pengarang($id_pengarang)
    {
        $model = new M_pengarang;
        $data = [
            'getpengarang' => $model->data_pengarang($id_pengarang)->getRow()
        ];
        return view('page/ubah/v_u_pengarang', $data);
    }
    // aksi ubah pengarang
    public function ubah_pengarang_aksi()
    {
        $model = new M_pengarang;
        $id_pengarang = $this->request->getVar('id_pengarang');
        // dd($id_pengarang);
        $model->ubah_pengarang([
            'nama_pengarang' => $this->request->getVar('nama_pengarang'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp')
        ], $id_pengarang);
        session()->setFlashdata('sukses', 'data berhasil diubah');
        return redirect()->to('/page/pengarang');
    }

    // hapus data pengarang
    public function hapus_pengarang($id_pengarang)
    {
        $model = new M_pengarang;
        $model->hapus($id_pengarang);
        session()->setFlashdata('hapus', 'Data berhasil Dihapus');
        return redirect()->to('/page/pengarang');
    }

    // tampil penerbit
    public function penerbit()
    {
        $model = new M_penerbit;
        $data = [
            'getpenerbit' => $model->data_penerbit()
        ];
        return view('page/v_penerbit', $data);
    }

    // tambah penerbit
    public function tambah_penerbit()
    {
        return view('page/tambah/v_t_penerbit');
    }
    // aksi tambah penerbit
    public function tambah_penerbit_aksi()
    {
        $model = new M_penerbit;
        $model->simpan([
            'nama_penerbit' => $this->request->getVar('nama_penerbit'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email')
        ]);
        return redirect()->to('/page/penerbit');
    }

    // ubah penerbit
    public function ubah_penerbit($id_penerbit)
    {
        $model = new M_penerbit;
        $data = [
            'getpenerbit' => $model->data_penerbit($id_penerbit)->getRow()
        ];
        return view('page/ubah/v_u_penerbit', $data);
    }
    // aksi ubah penerbit
    public function ubah_penerbit_aksi()
    {
        $model = new M_penerbit;
        $id_penerbit = $this->request->getVar('id_penerbit');
        $model->ubah_penerbit([
            'nama_penerbit' => $this->request->getVar('nama_penerbit'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email')
        ], $id_penerbit);
        session()->setFlashdata('sukses', 'Data Berhasil Diubah');
        return redirect()->to('/page/penerbit');
    }

    // hapus
    public function hapus_penerbit($id_penerbit)
    {
        $model = new M_penerbit;
        $model->hapus($id_penerbit);
        session()->setFlashdata('sukses', 'Data Berhasil Dihapus');
        return redirect()->to('/page/penerbit');
    }
}
