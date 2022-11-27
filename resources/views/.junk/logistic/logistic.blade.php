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
                            <h1 class="m-0">Logistik List</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="/logistic/create" class="btn btn-primary">Tambah Data</a>
                                </h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover table-bordered text-nowrap">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Posko</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th colspan="2" class="text-center">Volume</th>
                                        </tr>
                                        <tr>
                                            <th>Stock</th>
                                            <th>Stock Demand</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{ $i = 1; }}
                                        @foreach ($logistic as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->posko->name }}</td>
                                            <td>{{ $item->item->name }}</td>
                                            <td>{{ $item->stock }} {{ $item->unit->name }}</td>
                                            <td>{{ $item->demand }} {{ $item->unit->name }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- Footer section -->
    @include('template/footer')
</body>

</html>
