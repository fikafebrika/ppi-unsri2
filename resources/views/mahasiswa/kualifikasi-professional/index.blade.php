@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Kualifikasi Profesional') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <h5 class="card-header">Kualifikasi Profesional</h5>
      <a href="/kualifikasi-profesional/create" class="btn btn-primary mx-4 mt-2">Tambah Data</a>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if ($kualifikasi_profesional_users->count())
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Periode</th>
            <th>Nama Instansi/ Perusahaan</th>
            <th>Jabatan/ Tugas</th>
            <th>Nama Aktifitas/ Kegiatan/ Proyek</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Verifikator</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kualifikasi_profesional_users as $kualifikasi_profesional_user)


          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            {{-- III KOLOM B --}}
            <td><strong>{{ $kualifikasi_profesional_user->periode }}</strong></td>
            {{-- III KOLOM C --}}
            <td>{{ $kualifikasi_profesional_user->nama_instansi }}</td>
            {{-- III KOLOM D --}}
            <td>{{ $kualifikasi_profesional_user->jabatan }}</td>
            {{-- III KOLOM E --}}
            <td>{{ $kualifikasi_profesional_user->nama_aktifitas }}</td>
            {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
            @if ($kualifikasi_profesional_user->bukti_kualifikasi_profesional)
            <td>Ada</td>
            @else
            <td>Belum Ada</td>
            @endif
            {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
            {{-- <td>Ada</td> --}}
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              @if ($kualifikasi_profesional_user->status_validasi ==="valid")
              <span class="badge bg-label-success me-1"
              >Valid</span
            >
              @elseif($kualifikasi_profesional_user->status_validasi ==="invalid")
              <span class="badge bg-label-danger me-1"
              >Invalid</span
            >
              @elseif($kualifikasi_profesional_user->status_validasi ==="pending")
              <span class="badge bg-label-warning me-1"
              >Pending</span
            >
              @endif
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            {{-- <td>
              <a
                href="/kualifikasi-profesional/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td> --}}
            <td>Belum Ada</td>
            <td>
                <a href="/kualifikasi-profesional/{{ $kualifikasi_profesional_user->id }}"
                ><i class="bx bxs-show me-1" title="Lihat"></i
                ></a>
                <a href="/kualifikasi-profesional/{{ $kualifikasi_profesional_user->id }}/edit"
                ><i class="bx bx-edit-alt me-1" title="Edit"></i
                ></a>
                <form action="/kualifikasi-profesional/{{ $kualifikasi_profesional_user->id }}" method="POST" class="d-inline">
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
    <p class="text-center fs-4">Data Pengertian Tidak Ada, Silahkan Masukkan Data Pengertian</p>
    @endif

  </div>
@endsection

