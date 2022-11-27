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
        @include('template/preloader')

        <!-- Navbar -->
        @include('template/nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template/aside')

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
        </div>
        <!-- Footer section -->
        @include('template/footer')
</body>

</html>
