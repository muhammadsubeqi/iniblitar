@extends('layouts-admin.admin-master')
@section('title')
    Admin Info Jelajah Blitar | Tambah Kecamatan
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Kecamatan</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Kecamatan</a></li>
                <li class="breadcrumb-item active">Tambah Kecamatan</li>
            </ol>
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Kecamatan</h3>
                </div>
                <form method="POST" action="{{ route('district.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputKecamatan">Nama Kecamatan</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="exampleInputKecamatan" name="name" placeholder="Masukkan Nama Kecamatan">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputKecamatan">Google Map</label>
                            <input type="text" class="form-control @error('map') is-invalid @enderror"
                                id="exampleInputKecamatan" name="map" placeholder="Masukkan link Google Map">
                            @error('map')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
