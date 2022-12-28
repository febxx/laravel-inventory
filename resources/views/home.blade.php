@extends('layouts.app')

@section('content')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            @if(Auth::user()->role == 'admin')
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-inbox icon-home bg-primary text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Data Barang</p>
                                <h5>{{$barang}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Data User</p>
                                <h5>{{$user}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Data Barang Masuk Hari Ini</p>
                                <h5>{{$barang_masuk}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-id-card  icon-home bg-warning text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Data Barang Keluar Hari Ini</p>
                                <h5>{{$barang_keluar}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(Auth::user()->role == 'inventaris')
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Data Barang Masuk Hari Ini</p>
                                <h5>{{$barang_masuk}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(Auth::user()->role == 'pegawai')
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-id-card  icon-home bg-warning text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Data Barang Keluar Hari Ini</p>
                                <h5>{{$barang_keluar}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

