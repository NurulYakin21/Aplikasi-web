<?php echo $this->extend('/layout/v_template_user'); ?>
<?php echo $this->section('content'); ?>
<div class="container-fluid">
    <div class="row text-center">
        <?php foreach ($getbuku as $buku) {
            # code...
            ?>
                        
                <div class="card ml-3 mt-2" style="width: 16rem;">
                    <img class="card-img-top" src="<?php echo base_url(); ?>/upload/<?php echo $buku['gambar']; ?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $buku['judul']; ?></h5><br>
                        
                    </div>

                    <div class="card-footer bg-white">
                        <p><span class="badge badge-success">Rp.<?php echo $buku['harga']; ?></span></p>
                        <a class="card-text btn btn-success">Beli</a>
                        <a href="<?= base_url('page/detail_buku_user/'.$buku['id_buku']);?>" class="btn btn-danger">Detail</a>
                    </div>
                </div>
                           
                        <?php } ?>
    </div>
</div>
<?php $this->endSection(); ?>

