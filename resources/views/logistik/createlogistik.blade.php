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
      @include('template.preloader')

      <!-- Navbar -->
      @include('template.nav')
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
                            <h1 class="m-0">Form add logistik</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="namaPosko">Nama Logistik</label>
                                        <input type="email" class="form-control" id="namaPosko"
                                            placeholder="Nama Logistik">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="jumlahLogistik">Jumlah Logistik</label>
                                    <input type="email" class="form-control" id="jumlahLogistik"
                                        placeholder="Nama Logistik">
                                  </div>
                                    <div class="form-group">
                                      <label for="satuanLogistik">Satuan Logistik</label>
                                      <input type="email" class="form-control" id="satuanLogistik"
                                          placeholder="Nama Logistik">
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
