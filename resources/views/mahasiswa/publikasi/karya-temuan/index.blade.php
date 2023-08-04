@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Karya Temuan') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <h5 class="card-header">
        Karya Temuan/Inovasi/Paten dan Implementasi Teknologi
        Baru
      </h5>
      <a href="/publikasi/karya-temuan/create" class="btn btn-primary text-nowrap mx-4 mt-2">Tambah Data</a>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if ($karya_temuan_users->count())
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Bulan-Tahun</th>
            <th>Judul/ Nama Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Verifikator</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($karya_temuan_users as $karya_temuan_user)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              {{-- V.4 KOLOM B --}}
              <td><strong>{{ $karya_temuan_user->bulan_tahun }}</strong></td>
              {{-- V.4 KOLOM C --}}
              <td>{{ $karya_temuan_user->judul_karya_temuan }}</td>
              {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
              @if ($karya_temuan_user->bukti_karya_temuan)
              <td>Ada</td>
              @else
              <td>Belum Ada</td>
              @endif
              {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
              {{-- <td>Ada</td> --}}
              {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
              <td>
                @if ($karya_temuan_user->status_validasi === "valid")
                <span class="badge bg-label-success me-1"
                >Valid</span
              >
                @elseif($karya_temuan_user->status_validasi === "invalid")
                <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
                @elseif($karya_temuan_user->status_validasi === "pending")
                <span class="badge bg-label-warning me-1"
                >Pending</span
              >
                @endif
              </td>
              <td>Belum Ada</td>
              <td>
                  <a href="/publikasi/karya-temuan/{{ $karya_temuan_user->id }}"
                  ><i class="bx bxs-show me-1" title="Lihat"></i
                  ></a>
                  <a href="/publikasi/karya-temuan/{{ $karya_temuan_user->id }}/edit"
                  ><i class="bx bx-edit-alt me-1" title="Edit"></i
                  ></a>
                  <form action="/publikasi/karya-temuan/{{ $karya_temuan_user->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="bx bx-trash me-1 text-danger border-0 " title="Hapus" onclick="return confirm('Are you sure ?')"></button>
                  </form>
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
    <div class="alert alert-primary text-center fs-5 mx-4 mt-2" role="alert">
        Data Karya Temuan Tidak Ada, Silakan <a href="/publikasi/karya-temuan/create" class="fw-semibold text-decoration-underline">Tambah Data</a> Karya Temuan
    </div>
    @endif

  </div>
@endsection

