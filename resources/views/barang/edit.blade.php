@extends('layouts.app')

@section('content')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header mb-4">
            <h1>Ubah Barang</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/barang/update/{{$barang->id}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{$barang->nama}}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" value="{{$barang->deskripsi}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Stok</label>
                                <input type="number" name="stok" value="{{$barang->stok}}" class="form-control" required>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
