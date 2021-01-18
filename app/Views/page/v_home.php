<?= $this->extend('layout/v_template'); ?>
<?= $this->section('content'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Selamat Datang di Toko Books kami</h1>
        <div class="col-sm-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 55rem;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url(); ?>/gambar/slider1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url(); ?>/gambar/slider2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url(); ?>/gambar/spanduk.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>