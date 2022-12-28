@extends('layouts.app')

@section('content')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header mb-4">
            <h1>Ubah User</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/user/update/{{$user->id}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Role</label>
                                <select name="role" class="form-select form-control">
                                    <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                                    <option value="inventaris" @if($user->role == 'inventaris') selected @endif>Inventaris</option>
                                    <option value="pegawai" @if($user->role == 'pegawai') selected @endif>Pegawai</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
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
