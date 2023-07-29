@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Beranda') }}
@endsection

@section('sidebar')
@include('verifikator.partials.sidebar')
@endsection

@section('content')
<div class="card" id="daftarMahasiswa">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="card-header">Daftar Mahasiswa</h5>
    </div>
    <div class="table-responsive mx-3 mb-2 text-center">
        <table class="table table-hover">
            <thead class="align-middle">
                <tr>
                    <th class="text-lg-start">Mahasiswa</th>
                    <th>No. KTA (6 Digit Terakhir)</th>
                    <th>Badan Kejurusan</th>
                    <th>Profesi Utama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_verifikasi as $verifikasi)
                <tr>
                    <td class="text-lg-start">
                        <img
                            src="{{ asset('storage/' . $verifikasi->user->image) }}"
                            alt=""
                            class="rounded me-lg-2 my-2"
                            width="90"
                            height="120"
                        />
                        <strong>{{ $verifikasi->user->name }}</strong>
                    </td>
                    <td>{{ $verifikasi->user->nokta }}</td>
                    <td>{{ $verifikasi->user->jurusan }}</td>
                    <td>{{ $verifikasi->user->profesiutama }}</td>
                    <td>
                        <a
                            href="/verifikator/data-pribadi/pendidikan-formal/{{ $verifikasi->user->id }}"
                            class="btn btn-primary"
                            >Verifikasi</a
                        >
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between mt-3 mx-1">
            <div><small>Showing 1 to 2 of 2 entries</small></div>
            <div>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm">
                        <li class="page-item prev">
                            <a class="page-link" href="javascript:void(0);">
                                <i class="tf-icon bx bx-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);">
                                <i class="tf-icon bx bx-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

