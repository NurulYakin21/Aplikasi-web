<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php Base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php Base_url(); ?>/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
  <div class="register-logo">
    <a href="<?php Base_url(); ?>/template/index2.html"><b>TOKO BUKU</b> INDRIANI</a>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <!-- general form elements -->
        <div class="card card-primary mx-auto">
          <div class="card-header">
            <h3 class="card-title">Registrasi</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url('user/form_aksi') ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputNama1">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputNama1" placeholder="Enter nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <!-- <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                  </div> -->
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.card -->
  <!-- jQuery -->
  <script src="<?php Base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php Base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="<?php Base_url(); ?>/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php Base_url(); ?>/template/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php Base_url(); ?>/template/dist/js/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>