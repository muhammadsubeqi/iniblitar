@extends('layouts-admin.admin-master')
@section('title')
    Admin Info Jelajah Blitar | Tambah Wisata
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Wisata</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Wisata</a></li>
                <li class="breadcrumb-item active">Tambah Wisata</li>
            </ol>
        </div>
        <!-- /.col -->
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('/admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Wisata</h3>
                </div>
                <form method="POST" action="{{ route('destination.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kategori Wisata</label>
                            <select class="form-control select2bs4 @error('name') is-invalid @enderror"
                                name="categories_id">
                                <option value="0">Pilih Kategori...</option>
                                @foreach ($categories as $category)
                                    @if (old('categories_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        </option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
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
                            <select class="form-control select2bs4 @error('name') is-invalid @enderror" name="districts_id"
                                style="width: 100%;">
                                <option value="0">Pilih Kecamatan...</option>
                                @foreach ($districts as $district)
                                    @if (old('districts_id') == $district->id)
                                        <option value="{{ $district->id }}" selected>{{ $district->name }}</option>
                                        </option>
                                    @else
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endif
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
                                value="{{ old('name') }}">
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

                        <div class="form-group">
                            <label for="exampleInputDes">Deskripsi Wisata</label>
                            <textarea id="summernote" class="@error('content') is-invalid @enderror" id="exampleInputDes" name="content">
                                {{ old('content') }}</textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputgambar">Pilih Foto Wisata</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror"
                                id="exampleInputgambar" name="images" id="foto">
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
    <script src="{{ asset('/admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
        });

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
    </script>
    {{-- Script Css Crop --}}
    <script src="{{ asset('/admin/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
    <script>
        $('#foto').ijaboCropTool({
            preview: '.image-previewer',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['CROP', 'QUIT'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            onSuccess: function(message, element, status) {
                alert(message);
            },
            onError: function(message, element, status) {
                alert(message);
            }
        });
    </script>
@endpush
