@extends('layouts-admin.admin-master')
@section('title')
    Admin Info Jelajah Blitar | Edit Kategori
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Kategori</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                <li class="breadcrumb-item active">Edit Kategori</li>
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
                    <h3 class="card-title">Edit Data Kategori</h3>
                </div>
                <form method="POST" action="{{ route('category.update', $category) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kategori">Nama Kategori</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="kategori"
                                name="name" placeholder="Masukkan Nama Kategori" value="{{ $category->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug Kategori</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                name="slug" placeholder="Masukkan Nama Slug Kategori" value="{{ $category->slug }}">
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputgambar">Update Icon</label>
                            <input type="file" class="form-control @error('icon') is-invalid @enderror"
                                id="exampleInputgambar" name="icon" id="foto">
                            <small>*JPG|PNG|JPEG</small>
                            @error('icon')
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
        function convertToSlug(Text) {
            return Text.toLowerCase()
                .replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');
        }

        $('#kategori').change(function() {
            let title = $(this).val();
            $('#slug').val(convertToSlug(title));
        });
    </script>
@endpush
