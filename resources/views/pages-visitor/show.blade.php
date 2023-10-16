@extends('layouts-visitor.visitor-master')
@section('title')
    Detail | Info Jelajah Blitar
@endsection
@section('content')
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="pb-3">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ $destination->getImage() }}" alt="">
                        <div class="position-absolute bg-success d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">{{ date('d', strtotime($destination->updated_at)) }}</h4>
                            <small
                                class="text-white text-uppercase">{{ date('M', strtotime($destination->updated_at)) }}</small>
                        </div>
                    </div>
                    <div class="bg-secondary mb-3" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-city text-success"></i>
                                <a class="text-muted ml-2"
                                    href="{{ route('halaman.district.detail', ['id' => $destination->district->id]) }}">{{ $destination->district->name }}</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-success"></i>
                                <a class="text-muted ml-2"
                                    href="{{ route('halaman.category.detail', ['id' => $destination->category->id]) }}">{{ $destination->category->name }}</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="fas fa-map-marker-alt text-success"></i>
                                <a class=" ml-2 btn-sm btn-success rounded" href="{{ $destination->map }}"
                                    target="_blank">Lihat
                                    Lokasi</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">{{ $destination->name }}</h4>
                        {!! $destination->content !!}
                    </div>
                </div>
                <!-- Blog Detail End -->

                {{-- <!-- Comment List Start -->
                <div class="bg-secondary" style="padding: 30px; margin-bottom: 30px;">
                    <h3 class="mb-4">2 Comments</h3>
                    <div class="media">
                        <img src="{{ asset('/visitor/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1"
                            style="width: 45px;">
                        <div class="media-body">
                            <h6><a href="">Muhammad Subeqi</a></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="{{ asset('/visitor/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1"
                                    style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                        labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                        eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                        ipsum diam tempor consetetur at sit.</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-secondary mb-3" style="padding: 30px;">
                    <h3 class="mb-4">Tinggalkan Komentar</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama *</label>
                            <input type="text" class="form-control border-0" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control border-0" id="email">
                        </div>

                        <div class="form-group">
                            <label for="message">Deskripsi *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave a comment"
                                class="btn btn-success font-weight-semi-bold py-2 px-3">
                        </div>
                    </form>
                </div>
                <!-- Comment Form End --> --}}
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">

                <!-- Category Start -->
                <div class="mb-2">
                    <h3 class="mb-4">Kategori</h3>
                    <div class="bg-secondary" style="padding: 30px;">
                        <ul class="list-inline m-0">
                            @forelse ($categories as $category)
                                <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                    <a class="text-dark"
                                        href="{{ route('halaman.category.detail', ['id' => $category->id]) }}"><i
                                            class="fa fa-angle-right text-success mr-2"></i>{{ $category->name }}</a>
                                    <span class="badge badge-secondary badge-pill">
                                        @php
                                            $count = App\Models\Destination::where('categories_id', $category->id)->count();
                                            echo $count;
                                        @endphp
                                    </span>
                                </li>
                            @empty
                                <p>Tidak ada Category</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-2 mt-5">
                    <h3 class="mb-4">Terbaru</h3>
                    @forelse ($destinations as $destination)
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{ $destination->getImage() }}"
                                style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <a href="{{ route('wisata.show', $destination) }}"
                                class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3"
                                style="height: 80px;">
                                {{ $destination->name }}
                            </a>
                        </div>
                    @empty
                        <p>Tidak ada Wisata</p>
                    @endforelse
                </div>
                <!-- Recent Post End -->

                {{-- <!-- Image Start -->
                <div class="mb-5">
                    <img src="{{ asset('visitor/img/blog-1.jpg') }}" alt="" class="img-fluid">
                </div>
                <!-- Image End --> --}}

                <!-- Image Start -->
                <div class="mb-2">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="mb-2">Editor</h3>
                    <div class="bg-secondary text-center" style="padding: 30px;">
                        <p>Halo, nama saya muhammad subeqi. saya adalah pembuat sistem informasi
                            jelajah
                            blitar ini. jika
                            kalian ingin berkenalan dengan saya atau ingin bertanya silahkan hubungi kontak saya</p>
                        <a href="https://wa.me/6285735621003" class="btn btn-success py-2 px-4">Kontak saya</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->
@endsection
