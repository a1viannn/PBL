@extends('master.main')
@section('title', 'Alat')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Alat</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTabel</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Aksi</th>

                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
