<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MY SHOP BOOKS | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php Base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php Base_url(); ?>/template/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url(); ?>/template/index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url(); ?>/template/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url(); ?>/template/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url(); ?>/template/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        Hai, Nurul Yakin<i class="far fa-user ml-2"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Menu</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-cog mr-2"></i> Setting
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <?= $this->include('layout/sidebar'); ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
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
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-lg-3 text-center mt-4 col-md-6">
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>/gambar/default.jpg" alt=" Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"></h5>
                                        <p class="card-text mb-1"></p>
                                        <span class="badge badge-success mb-2"></span>
                                        <br>
                                        <p>1200</p>
                                        <a class="card-text btn btn-success">Beli</a>
                                        <a class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->renderSection('content') ?>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= $this->include('layout/footer'); ?>