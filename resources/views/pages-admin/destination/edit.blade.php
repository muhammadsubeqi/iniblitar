@extends('layouts-admin.admin-master')
@section('title')
    Admin Info Jelajah Blitar | Edit Wisata
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Wisata</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Wisata</a></li>
                <li class="breadcrumb-item active">Edit Wisata</li>
            </ol>
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Wisata</h3>
                </div>
                <form method="POST" action="{{ route('destination.update', $destination) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kategori Wisata</label>
                            <select class="form-control @error('name') is-invalid @enderror" name="categories_id">
                                <option value="0">== Pilih Kategori ==</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $destination->categories_id) selected @endif>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('categories_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control @error('name') is-invalid @enderror" name="districts_id">
                                <option value="0">== Pilih Kecamatan ==</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" @if ($district->id == $destination->districts_id) selected @endif>
                                        {{ $district->name }}</option>
                                @endforeach
                            </select>
                            @error('districts_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputWisata">Nama Wisata</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="exampleInputWisata" name="name" placeholder="Masukkan Nama Wisata"
                                value="{{ $destination->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputKecamatan">Google Map</label>
                            <input type="text" class="form-control @error('map') is-invalid @enderror"
                                id="exampleInputKecamatan" name="map" placeholder="Masukkan Link Google Map"
                                value="{{ $district->map }}">
                            @error('map')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDes">Deskripsi Wisata</label>
                            <textarea id="summernote" class="@error('content') is-invalid @enderror" id="exampleInputDes" name="content">
                            {{ $destination->content }}</textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputgambar">Pilih Foto Wisata</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror"
                                id="exampleInputgambar" name="images">
                            @error('images')
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
@push('script')
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
        });
    </script>
@endpush
