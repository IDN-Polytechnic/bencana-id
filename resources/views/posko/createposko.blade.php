<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    @include('template/header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="{{ asset('/') }}dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Bencana Id</></span>
            </a>

            <!-- Sidebar -->
            @include('template/nav')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Form add Posko</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Posko</label>
                                <input type="text" class="form-control" placeholder="Isi nama posko">
                            </div>
                            <h6 class="fw-bold">Alamat Posko</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Kecamatan">
                                    </div>
                                    <div class="form-group">

                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Kelurahan">
                                    </div>
                                    <div class="form-group">

                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Provinsi">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="RT">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">

                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="RW">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Jalan">
                                    </div>
                                    <div class="form-group">

                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Kabupatern/kota">
                                    </div>
                                </div>
                            </div>
                            <h6 class="fw-bold">Nama Lembaga</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Lembaga">
                                    </div>
                                    <div class="form-group">

                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Koordinator">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@include('template/footer')
</body>

</html>
