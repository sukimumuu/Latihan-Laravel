@extends('Admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-dark">Data Buku</h3>
            <a href="{{ route('crud-add') }}"><button type="button" class="btn btn-success">Tambah Data</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <td>No</td>
                            <td>Nama</td>
                            <td>Penulis</td>
                            <td>Terbit</td>
                            <td>Kategori</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $book as $for)
                            <tr class="text-center">
                                <td>{{ $for->id }}</td>
                                <td class="text-left">{{ $for->name }}</td>
                                <td>{{ $for->penulis }}</td>
                                <td>{{ $for->tahun_terbit }}</td>
                                <td>{{ $for->category }}</td>
                                <td>
                                    <a href="/control-panel/crud/{{ $for->id }}/edit"><i class="fas fa-file text-warning"></i></a>
                                    <a href="/control-panel/crud/{{ $for->id }}/delete"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
