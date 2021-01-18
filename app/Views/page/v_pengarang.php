<?= $this->extend('layout/v_template') ?>
<?= $this->section('content'); ?>
<!-- BreadCrumb -->
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-3">
            <li class="breadcrumb-item"><a href="<?php echo base_url('pages/index') ?>">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pengarang</li>
        </ol>
    </nav>
    <!-- BreadCrumb -->

    <?php if (session()->getFlashdata('sukses')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="badge rounded-pill bg-success">SUKSESS,</span> <?php echo session()->getFlashdata('sukses'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } elseif (session()->getFlashdata('hapus')) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="badge rounded-pill bg-danger">SUKSESS</span> <?php echo session()->getFlashdata('hapus'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }; ?>
    <!-- Data Pengarang -->
    <div class="card">
        <div class="card-header">
            <a href="<?php echo base_url('page/tambah_pengarang') ?>" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getpengarang as $pengarang) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $pengarang['nama_pengarang']; ?></td>
                            <td><?= $pengarang['alamat']; ?></td>
                            <td><?= $pengarang['email']; ?></td>
                            <td><?= $pengarang['no_telp']; ?></td>
                            <td>
                                <a href="<?= base_url('page/ubah_pengarang/' . $pengarang['id_pengarang']); ?>" class="btn btn-success">Ubah</a>
                                <a href="<?= base_url('page/hapus_pengarang/' . $pengarang['id_pengarang']); ?>" onclick="return confirm('Yakin Ingin Menghapus? \nData Yang Sudah Dihapus Tidak Bisa Dikembalikan!!')" class="btn btn-danger">Hapus</a>
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