@extends('layouts-visitor.visitor-master')
@section('title')
    Kategori | Info Jelajah Blitar
@endsection
@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Kategori</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">kategori</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Berdasarkan</h6>
                <h1 class="mb-4">Kategori</h1>
            </div>
            <div class="row pb-3">
                @forelse ($categories as $category)
                    <div class="col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center bg-success mb-4 p-4">
                            <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                            <h6 class="text-white font-weight-medium m-0">{{ $category->name }}</h6>
                        </div>
                        <a class="border-bottom text-decoration-none"
                            href="{{ route('halaman.category.detail', ['id' => $category->id]) }}">Kunjungi</a>
                    </div>
                @empty
                    <p>Tidak ada Kategori</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
