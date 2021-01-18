<?php echo $this->extend('layout/v_template_user'); ?>
<?php echo $this->section('content'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('page/buku') ?>">Data Buku</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="<?php echo base_url('upload/' . $getdetail->gambar); ?>" alt="<?= $getdetail->gambar; ?>" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?= $getdetail->judul; ?></h3>
             <table class="table table-striped">
                <hr>
              <tr>
                <td>Kategori</td>
                <td>:</td>
                <td><?= $getdetail->nama_kategori; ?></td>
              </tr>
              <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><?= $getdetail->nama_pengarang; ?></td>
              </tr>
              <tr>
                <td>penerbit</td>
                <td>:</td>
                <td><?= $getdetail->nama_penerbit; ?></td>
              </tr>
              <tr>
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><?= $getdetail->tahun_terbit; ?></td>
              </tr>
              <tr>
                <td>Stok</td>
                <td>:</td>
                <td><?= $getdetail->stok; ?></td>
              </tr>
              <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?= $getdetail->harga; ?></td>
              </tr>
             </table>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="<?php echo base_url('/page/halaman_user'); ?>" class="btn btn-success">Kembali</a>
                </li>
                </ol>
              </div>
            </div>
            </div>
          </div> 
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?php echo $this->endSection(); ?>