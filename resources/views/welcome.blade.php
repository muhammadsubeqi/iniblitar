@extends('layouts-visitor.visitor-master')
@section('title')
    INI BLITAR - Info Jelajah Blitar
@endsection
@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-success mb-4">INI BLITAR</h1>
            <h1 class="text-white display-3 mb-5">Informasi Jelajah Blitar</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <form action="{{ route('halaman.search') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;"
                            placeholder="Cari Wisata..." name="search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success px-3">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Rekomendasi</h6>
                <h1 class="mb-4">Info Jelajah Blitar</h1>
            </div>
            <div class="row justify-content-center">
                @forelse ($destinations as $destination)
                    <div class="col-md-4 mb-5">
                        <div class="position-relative">
                            <img class="img-fluid w-100" style="height: 200px" src="{{ $destination->getImage() }}"
                                alt="">
                            <div class="position-absolute bg-success d-flex flex-column align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                <h4 class="font-weight-bold mb-n1">{{ date('d', strtotime($destination->updated_at)) }}
                                </h4>
                                <small
                                    class="text-white text-uppercase">{{ date('M', strtotime($destination->updated_at)) }}</small>
                            </div>
                        </div>
                        <div class="bg-secondary" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-road text-success"></i>
                                    <a class="text-muted ml-2"
                                        href="{{ route('halaman.district.detail', ['id' => $destination->district->id]) }}">{{ $destination->district->name }}</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-success"></i>
                                    <a class="text-muted ml-2"
                                        href="{{ route('halaman.category.detail', ['id' => $destination->category->id]) }}">{{ $destination->category->name }}</a></a>
                                </div>
                            </div>
                            <h4 class="font-weight-bold mb-3">{{ $destination->name }}</h4>
                            <p>{!! substr(strip_tags($destination->content), 0, 100) !!}...</p>
                            <a class="border-bottom border-success text-uppercase text-decoration-none"
                                href="{{ route('wisata.show', $destination) }}">Selengkapnya... <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                @empty
                    <p>Belum Ada Wisata</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ asset('/visitor/img/alun2.jpg') }}" alt="">
                    <div class="bg-success text-light text-center p-4">
                        <h3 class=" text-light m-0">Blitar Kota Patria</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-success text-uppercase font-weight-bold">Tentang | INI BLITAR</h6>
                    <h1 class="mb-4">Informasi Jelajah Blitar </h1>
                    <p class="mb-4">Blitar adalah tempat yang kaya akan budaya dan sejarah, tempat di mana Anda dapat
                        menjelajah sejarah Indonesia sambil menikmati keindahan alamnya. Ini adalah tujuan yang tepat bagi
                        para pencinta sejarah, pecinta alam, dan pecinta kuliner. Selamat menjelajah Blitar!</p>
                    <div class="d-flex align-items-center pt-2">
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/-wwzFGUt9b4" title="YouTube video player"
                            data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Testimonial</h6>
                <h1 class="mb-4">Pengunjung Web Mengatakan</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('/visitor/img/testimonial-1.jpg') }}"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Muhammad Subeqi</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('/visitor/img/testimonial-2.jpg') }}"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Muhammad Subeqi</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('/visitor/img/testimonial-3.jpg') }}"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Muhammad Subeqi</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('/visitor/img/testimonial-4.jpg') }}"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Muhammad Subeqi</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
@endsection
