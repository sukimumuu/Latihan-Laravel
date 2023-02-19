@extends('Admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-dark">Daftar Kategori</h3>
            <a href="{{ route('writer.add') }}"><button type="button" class="btn btn-success">Tambah Kategori</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <td>No</td>
                            <td>Kategori</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $category as $for)
                            <tr class="text-center">
                                <td>{{ $for->id }}</td>
                                <td>{{ $for->writer }}</td>
                                <td>
                                    <a href="/control-panel/writer/{{ $for->id }}/edit"><i class="fas fa-file text-warning"></i></a>
                                    <a href="/control-panel/writer/{{ $for->id }}/delete"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
