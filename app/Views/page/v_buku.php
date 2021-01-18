<?= $this->extend('layout/v_template') ?>
<?= $this->section('content'); ?>
<!-- BreadCrumb -->
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-3">
            <li class="breadcrumb-item"><a href="<?php echo base_url('pages/index') ?>">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
        </ol>
    </nav>
    <!-- BreadCrumb -->

    <?php if (session()->getFlashdata('sukses')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="badge rounded-pill bg-success">Berhasil</span> <?php echo session()->getFlashdata('sukses'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } elseif (session()->getFlashdata('hapus')) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="badge rounded-pill bg-danger">Berhasil</span> <?php echo session()->getFlashdata('hapus'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }; ?>
    <!-- Data buku -->
    <div class="card">
        <div class="card-header">
            <a href="<?php echo base_url('page/tambah_buku') ?>" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun terbit</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getbuku as $buku) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $buku['nama_kategori']; ?></td>
                            <td><?= $buku['judul']; ?></td>
                            <td><?= $buku['nama_pengarang']; ?></td>
                            <td><?= $buku['nama_penerbit']; ?></td>
                            <td><?= $buku['tahun_terbit']; ?></td>
                            <td><?= $buku['stok']; ?></td>
                            <td><img src="<?php echo base_url('upload/' . $buku['gambar']); ?>" alt="<?= $buku['gambar'] ?>" width="64"></td>
                            <td>
                                <a href="<?= base_url('page/ubah_buku/' . $buku['id_buku']); ?>" class="btn btn-success">Ubah</a>
                                <a href="<?= base_url('page/detail_buku/'.$buku['id_buku']);?>" class="btn btn-success">Detail</a>
                                <a href="<?= base_url('page/hapus/' . $buku['id_buku']); ?>" onclick="return confirm('Yakin Ingin Menghapus? \nData Yang Sudah Dihapus Tidak Bisa Dikembalikan!!')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>