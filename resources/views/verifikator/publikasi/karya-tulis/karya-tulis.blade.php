@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Karya Tulis') }}
@endsection

@section('sidebar')
@include('verifikator.partials.sidebar-detail', ["userId" => $userId ])
@endsection

@section('content')
<div class="card">
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <h5 class="card-header">
        Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan
      </h5>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if ($list_karya_tulis_user->count())
  <div class="table-responsive mx-3 mb-2 text-center">
    <table class="table table-hover">
      <thead class="align-middle">
        <tr>
          <th>#</th>
          <th>Bulan-Tahun</th>
          <th>Judul Karya Tulis</th>
          <th>Nama Media Publikasi</th>
          <th>Lokasi</th>
          <th>Bukti</th>
          <th>Status</th>
          <th>Verifikator</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($list_karya_tulis_user as $karya_tulis_user)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          {{-- V.1 KOLOM B --}}
          <td><strong>{{ $karya_tulis_user->bulan_tahun }}</strong></td>
          {{-- V.1 KOLOM C --}}
          <td>{{ $karya_tulis_user->judul_karya_tulis}}</td>
          {{-- V.1 KOLOM D --}}
          <td>{{ $karya_tulis_user->nama_media}}</td>
          {{-- V.1 KOLOM E --}}
          <td>{{ $karya_tulis_user->lokasi}}</td>

          {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
          @if ( $karya_tulis_user->bukti_karya_tulis)
            <td>Ada</td>
          @else
            <td>Belum Ada</td>
          @endif
          {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
          {{-- <td>Ada</td> --}}

          {{-- Status Data FAIP, Kalo belum diverifikasi atau divalidasi, statusnyo masih "Pending" --}}
          <td>
            @if ($karya_tulis_user->status_validasi === "valid")
            <span class="badge bg-label-success me-1"
            >Valid</span
          >
            @elseif($karya_tulis_user->status_validasi === "invalid")
            <span class="badge bg-label-danger me-1"
            >Invalid</span
          >
            @elseif($karya_tulis_user->status_validasi === "pending")
            <span class="badge bg-label-warning me-1"
            >Pending</span
          >
            @endif
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator terakhir dan hasilnyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator terakhir dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}

          {{-- Kalo belum ada verifikator yang meriksa, kosongin be --}}
          <td>Admin@gmail.com</td>
          {{-- Kalo ada, tampilin verifikator terakhir yg meriksa --}}
          {{-- <td>Verifikator Satu</td> --}}

          <td>
            <a
              href="/verifikator/publikasi/karya-tulis/{{ $karya_tulis_user->id }}/edit"
              class="btn btn-sm btn-primary"
              >Periksa</a
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
              <a class="page-link" href="javascript:void(0);"
                ><i class="tf-icon bx bx-chevron-left"></i
              ></a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0);"
                >1</a
              >
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);"
                >2</a
              >
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);"
                >3</a
              >
            </li>
            <li class="page-item next">
              <a class="page-link" href="javascript:void(0);"
                ><i class="tf-icon bx bx-chevron-right"></i
              ></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div> 
  @else
  <p class="text-center fs-4">Data Organisasi Tidak Ada, Silahkan Masukkan Data Organisasi</p>
  @endif
    
  </div>
@endsection

