@extends('layouts.app')

@section('content')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header mb-4">
            <div class="row">
                <div class="col-6"><h1>Data Barang Masuk</h1></div>
                <div class="col-6 text-end">
                    <a href="/barang_masuk/cetak_pdf" class="btn btn-primary">Cetak PDF</a>
                    <a href="/barang_masuk/create" class="btn btn-info">Tambah Barang Masuk</a>
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
                                        <th scope="col">Barang</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jumlah Barang</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->barang->nama}}</td>
                                        <td>{{$data->tanggal}}</td>
                                        <td>{{$data->jumlah_barang}}</td>
                                        <td>
                                            <a href="/barang_masuk/delete/{{$data->id}}" class="btn btn-danger">Hapus</a>
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

