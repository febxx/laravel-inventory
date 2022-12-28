@extends('layouts.app')

@section('content')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header mb-4">
            <div class="row">
                <div class="col-6"><h1>Data Barang</h1></div>
                <div class="col-6 text-end">
                    <a href="/barang/cetak_pdf" class="btn btn-primary">Cetak PDF</a>
                    <a href="/barang/create" class="btn btn-info">Tambah Barang</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $data)
                                    <tr>
                                        <th>{{$loop->iteration}}</th>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->deskripsi}}</td>
                                        <td>{{$data->stok}}</td>
                                        <td>
                                            <a href="/barang/edit/{{$data->id}}" class="btn btn-warning">Edit</a>
                                            <a href="/barang/delete/{{$data->id}}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

