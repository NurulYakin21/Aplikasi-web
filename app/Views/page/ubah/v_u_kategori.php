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
    <!-- form Ubah Kategori -->
    <div class="card">
        <div class="card-header">
            <a href="<?php echo base_url('page/kategori') ?>" class="btn btn-success">Kembali</a>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('Page/ubah_aksi_kategori') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?= $getkategori->id_kategori; ?>" name="id_kategori">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama kategori</label>
                    <input type="text" class="form-control" value="<?= $getkategori->nama_kategori; ?>" name="nama_kategori" id="formGroupExampleInput" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>
</div>
<?= $this->endSection(); ?>