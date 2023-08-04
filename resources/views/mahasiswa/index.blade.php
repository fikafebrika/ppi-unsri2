@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Beranda') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('header')
@include('mahasiswa.partials.header')
@endsection

@section('content')
<div class="card">
    <div class="card-body pb-2">
        <div class="card-title">
            <h5 class="text-nowrap fw-semibold">MENU</h5>
        </div>
    </div>
    <div class="row mx-2 text-center">
        <div class="col-md-4 mb-4">
            <a href="/profil">
                <div class="card border border-1 border-light">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="avatar badge bg-primary w-px-35 h-px-35">
                                <i class="bx bx-layout mt-1"></i>
                            </div>
                        </div>
                        <h5 class="card-title mb-2 text-nowrap">
                            Klaim Pencapaian
                        </h5>
                        {{-- <small class="text-success fw-semibold">
                            <i class="bx bx-check-circle"></i>
                            Tersedia
                        </small> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="/rekognisi-pencapaian">
                <div class="card border border-1 border-light">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="avatar badge bg-primary w-px-35 h-px-35">
                                <i class="bx bx-dock-top mt-1"></i>
                            </div>
                        </div>
                        <h5 class="card-title mb-2 text-nowrap">
                            Rekognisi Pencapaian
                        </h5>
                        {{-- <small class="text-danger fw-semibold">
                            <i class="bx bx-time"></i>
                            Belum Tersedia
                        </small> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="/kartu-hasil-studi">
                <div class="card border border-1 border-light">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="avatar badge bg-primary w-px-35 h-px-35">
                                <i class="bx bx-file mt-1"></i>
                            </div>
                        </div>
                        <h5 class="card-title mb-2">
                            Kartu Hasil Studi
                        </h5>
                        {{-- <small class="text-danger fw-semibold">
                            <i class="bx bx-time"></i>
                            Belum Tersedia
                        </small> --}}
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

