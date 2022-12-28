@extends('layouts.app')

@section('content')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header mb-4">
            <h1>Tambah Barang Keluar</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/barang_keluar/store" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Barang</label>
                                <select name="barang_id" class="form-select form-control">
                                    @foreach($barang as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" value="{{date('Y-m-d')}}">
                            </div>
                            <div class="mb-3">
                                <label>Jumlah Barang</label>
                                <input type="number" name="jumlah_barang" class="form-control" required>
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
