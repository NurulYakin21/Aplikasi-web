<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php Base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php Base_url(); ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php Base_url(); ?>/template/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card">
            <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/dua.png" alt=" Card image cap" height="150">

        </div>
        <!-- <div class="register-logo">
            <a href="<?php Base_url(); ?>/template/index2.html"><b>TOKO BUKU</b> INDRIANI</a>
        </div> -->

        <div class="card">
            <div class="card-body register-card-body">
                <?php if (session()->getFlashdata('gagal')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="badge rounded-pill bg-success">Gagal</span> <?php echo session()->getFlashdata('gagal'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <p class="login-box-msg">Login membership</p>

                <form action="<?php Base_url(); ?>/Login/login_user_aksi" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div> -->
                        <!-- /.col -->
                        <div class="col-4">
                            <a href="<?= base_url('Login/form_user'); ?>" class="btn btn-primary">Register</a>
                            <!-- <button type="submit" class="btn btn-primary btn-block">Register</button> -->
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div> -->

                <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?php Base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php Base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php Base_url(); ?>/template/dist/js/adminlte.min.js"></script>
</body>

</html>