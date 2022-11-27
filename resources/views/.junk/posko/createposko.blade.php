<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    @include('template.header')
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
    </div>
    <!-- Footer section -->
    @include('template/footer')
</body>

</html>
