@extends('master.main')
@section('title', 'Pendaftaran')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Pendaftar</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        {{-- <tr>
                    <td>NIM</td>
                    <td>: {{ $detail->nim }}</td>
                    <td>Nama</td>
                    <td>: {{ $detail->nama }}</td>
                </tr> --}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-5">
                        <tbody>
                            <td>NIM</td>
                            <td>: {{ $detail->nim }}</td>
                            <td>Nama</td>
                            <td>: {{ $detail->nama }}</td>
                            </tr>

                            <tr>
                                <td>Prodi</td>
                                <td>: {{ $detail->prodi }}</td>
                                <td>Semester</td>
                                <td>: {{ $detail->alamat }}</td>
                            </tr>

                            <tr>
                                <td>No Telp</td>
                                <td>: {{ $detail->no_telp }}</td>
                                <td>Email</td>
                                <td>: {{ $detail->email }}</td>
                            </tr>

                            <tr>
                                <td>Divisi 1</td>
                                <td>: {{ $detail->divisi1->nama }}</td>
                                <td>Divisi 2</td>
                                <td>: {{ $detail->divisi2->nama }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

    {{-- sweet alert --}}
    @include('sweetalert::alert')

@endsection
