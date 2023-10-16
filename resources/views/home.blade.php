@extends('layouts-admin.admin-master')
@section('title')
    Admin Info Jelajah Blitar | Dashboard
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
            </ol>
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>
                        @php
                            $count = DB::table('categories')->count();
                            echo $count;
                        @endphp
                    </h3>

                    <p>Kategori</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('category.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>
                        @php
                            $count = DB::table('districts')->count();
                            echo $count;
                        @endphp
                    </h3>

                    <p>Kecamatan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('district.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>
                        @php
                            $count = DB::table('destinations')->count();
                            echo $count;
                        @endphp
                    </h3>

                    <p>Wisata</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('destination.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>

                    <p>Pengunjung Web</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <section class="col-lg-12 connectedSortable">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Info</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="info-box">
                            <span class="info-box-icon"><img src="{{ asset('/admin/dist/img/avatar.png') }}" width="200"
                                    alt=""></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Selamat Datang di Sistem Informasi Jelajah Blitar,</span>
                                <span class="info-box-text">anda masuk dengan akun
                                    <b>{{ auth()->user()['email'] }}</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
