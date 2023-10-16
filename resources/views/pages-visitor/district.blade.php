@extends('layouts-visitor.visitor-master')
@section('title')
    Kecamatan | Info Jelajah Blitar
@endsection
@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Kecamatan</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Kecamatan</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Berdasarkan</h6>
                <h1 class="mb-4">Kecamatan</h1>
            </div>
            <div class="row pb-3">
                @forelse ($districts as $district)
                    <div class="col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center bg-success mb-4 p-4">
                            <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                            <h6 class="text-white font-weight-medium m-0">{{ $district->name }}</h6>
                        </div>
                        <a class="border-bottom text-decoration-none"
                            href="{{ route('halaman.district.detail', ['id' => $district->id]) }}">Kunjungi</a>
                    </div>
                @empty
                    <p>Tidak ada Kecamatan</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
