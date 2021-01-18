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
    <!-- form tambah Buku -->
    <div class="card">
        <div class="card-header">
            <a href="<?php echo base_url('page/buku') ?>" class="btn btn-success">Kembali</a>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('Page/tambah_buku_aksi') ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">

                    <select class="form-control" name="nama_kategori">
                        <option value="">Pilih Kategori</option>
                        <?php
                        foreach ($getkategori as $kategori) {


                        ?>
                            <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" id="formGroupExampleInput" required>
                </div>
                <div class="mb-3">

                    <select class="form-control" name="nama_pengarang">
                        <option value="">Pilih Pengarang</option>
                        <?php
                        foreach ($getpengarang as $pengarang) {

                        ?>
                            <option value="<?php echo $pengarang['id_pengarang'] ?>"><?php echo $pengarang['nama_pengarang'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">

                    <select class="form-control" name="nama_penerbit">
                        <option value="">Pilih Penerbit</option>
                        <?php
                        foreach ($getpenerbit as $penerbit) {


                        ?>
                            <option value="<?php echo $penerbit['id_penerbit'] ?>"><?php echo $penerbit['nama_penerbit'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Tahun _terbit</label>
                    <input type="text" class="form-control" value="<?php echo date('Y-m-d') ?>" name="tahun_terbit" id="formGroupExampleInput" required>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Stok</label>
                        <input type="text" class="form-control" name="stok" id="formGroupExampleInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" id="formGroupExampleInput" required>
                    </div>
                    <label for="formFile" class="form-label">Unggah File</label>
                    <input class="form-control" name="gambar" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>
</div>
<?= $this->endSection(); ?>