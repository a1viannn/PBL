@extends('master.main')
@section('title', 'Divisi')
@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Divisi</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('create-divisi')}}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus"></i> Tambah</a>
            {{-- <a href="#" class="btn btn-primary btn-sm ml-auto" data-toggle="modal" data-target="#ModalCreate"><i class="fas fa-plus"></i> Tambah</a> --}}

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($dtDivisi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('delete-divisi', $item->id) }}" method="POST">
                                    {{-- <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalEdit{{$item->id}}"><i class="fas fa-edit"></i> Edit</a> --}}
                                    <a href="{{ route('edit-divisi', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"> Hapus</button>
                                </form>
                            </td>

                        </tr>
                        {{-- @include('divisi.modal.edit', ['divisis' => $item]) --}}
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
{{-- @include('divisi.modal.create') --}}

{{-- sweet alert --}}
@include('sweetalert::alert')

@endsection
