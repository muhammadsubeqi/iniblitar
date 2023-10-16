@extends('layouts-visitor.visitor-master')
@section('title')
    Semua Wisata | Info Jelajah Blitar
@endsection
@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-4">
            <h1 class="text-white display-3">{{ $district->name }}</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">{{ $district->name }}</p>
            </div>
        </div>
        <div class="container text-center">
            <a href="{{ $district->map }}" class="btn btn-success">LIHAT WILAYAH</a>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Daftar</h6>
                <h1 class="mb-4">Jelajah di Blitar</h1>
            </div>
            <div class="row">
                @forelse ($destinations as $destination)
                    <div class="col-lg-3 col-md-6">
                        <div class="team card position-relative overflow-hidden border-0 mb-5">
                            <img class="card-img-top" style="height:200px" src="{{ $destination->getImage() }}"
                                alt="">
                            <div class="card-body text-center p-0">
                                <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                    <h5 class="font-weight-bold">{{ $destination->name }}</h5>
                                    <span>{{ $destination->district->name }}</span>
                                </div>
                                <div class="team-social d-flex align-items-center justify-content-center bg-success">
                                    <a href="{{ route('wisata.show', $destination) }}"
                                        class="text-light">Selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 mb-5 text-center">
                        Tidak ada wisata untuk kategori ini
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
