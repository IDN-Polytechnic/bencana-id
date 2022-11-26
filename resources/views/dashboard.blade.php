<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('/') }}plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
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

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Bencana Id</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Hallo Admin</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">Dashboard</li>
                        <li class="nav-item">
                            <a href="/posko" class="nav-link">
                                <i class="nav-icon fas fa-ellipsis-h"></i>
                                <p>Posko List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logistik" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Logistik LIst</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Koordinator Contact</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Admin Contact</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h1 class="m-0 text-center">Posko List</h1>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">Posko Name</th>
                                                    <th rowspan="2">Address</th>
                                                    <th colspan="3" class="text-center">Logistik</th>
                                                </tr>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Demand</th>
                                                    <th>Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Cugenang 1</td>
                                                    <td>
                                                        <a href="http://" target="_blank"
                                                            rel="noopener noreferrer">Cugenang Raya 1</a>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Mie Instant</li>
                                                            <li>Air Mineral</li>
                                                            <li>Susu</li>
                                                            <li>Minyak</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>30 Dus</li>
                                                            <li>40 Dus</li>
                                                            <li>10 pcs</li>
                                                            <li>5 pcs</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>5 Dus</li>
                                                            <li>23 Dus</li>
                                                            <li>4 pcs</li>
                                                            <li>2 pcs</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Cugenang 1</td>
                                                    <td>Kec Cugenang puskesmas raya kali</td>
                                                    <td>
                                                        <ul>
                                                            <li>Mie Instant</li>
                                                            <li>Air Mineral</li>
                                                            <li>Susu</li>
                                                            <li>Minyak</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>300 Dus</li>
                                                            <li>402 Dus</li>
                                                            <li>120 pcs</li>
                                                            <li>51 pcs</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>30 Dus</li>
                                                            <li>42 Dus</li>
                                                            <li>12 pcs</li>
                                                            <li>5 pcs</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    </section>
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

        <!-- jQuery -->
        <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('/') }}plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="{{ asset('/') }}plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="{{ asset('/') }}plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="{{ asset('/') }}plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{ asset('/') }}plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('/') }}plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('/') }}plugins/moment/moment.min.js"></script>
        <script src="{{ asset('/') }}plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('/') }}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="{{ asset('/') }}plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('/') }}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/') }}dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('/') }}dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('/') }}dist/js/pages/dashboard.js"></script>
</body>

</html>
