@extends('master.main')
@section('title', 'Pendaftaran')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Pendaftaran</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Prodi</th>
                                <th>Divisi 1</th>
                                <th>Divisi 2</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dtaPendaftaran as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>
                                        @if ($item->divisi1)
                                            {{ $item->divisi1->nama }}
                                        @else
                                            "tidak ada divisi yang cocok"
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->divisi2)
                                            {{ $item->divisi2->nama }}
                                        @else
                                            "tidak ada divisi yang cocok"
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 'menunggu')
                                            <span class="badge badge-warning">Belum
                                                <br> Terverifikasi
                                            </span>
                                        @endif
                                    <td>
                                        <a href="{{ route('detail-pendaftaran', $item->id) }}"
                                            class="btn btn-primary  btn-sm"><i class="fas fa-eye"></i> Detail</a>
                                    </td>
                                </tr>
                            @endforeach
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
