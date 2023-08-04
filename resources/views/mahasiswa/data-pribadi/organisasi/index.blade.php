@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Organisasi') }}
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
        Organisasi Profesi & Organisasi Lainnya yang Dimasuki
      </h5>
      <a href="/data-pribadi/organisasi/create" class="btn btn-primary text-nowrap mx-4 mt-2">Tambah Data</a>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if ($data_organisasi_user->count())
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Nama Organisasi</th>
            <th>Jenis Organisasi</th>
            <th>Kota</th>
            <th>Negara</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Verifikator</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data_organisasi_user as $organisasi_user)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            {{-- I.3 Kolom B --}}
            <td><strong>{{ $organisasi_user->nama_organisasi }}</strong></td>
            {{-- I.3 Kolom C --}}
            @if ($organisasi_user->jenis_organisasi == "pii")
            <td>Organisasi PII</td>
            @elseif($organisasi_user->jenis_organisasi == "non-pii")
            <td>Organisasi Keinsinyuran Non PII</td>
            @elseif($organisasi_user->jenis_organisasi == "non-keinsinyuran")
            <td>Organisasi Non Keinsinyuran</td>
            @endif
            {{-- I.3 Kolom C --}}
            <td>{{ $organisasi_user->kota }}</td>
            {{-- I.3 Kolom D --}}
            <td>{{ $organisasi_user->negara }}</td>
            {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
            @if ($organisasi_user->bukti_organisasi)
              <td>Ada</td>
            @else
            <td>Belum Ada</td>
            @endif
            {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
            {{-- <td>Ada</td> --}}
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              @if ( $organisasi_user->status_validasi === "pending" )
                <span class="badge bg-label-warning me-1">Pending</span>
              @elseif($organisasi_user->status_validasi === "valid")
               {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
              <span class="badge bg-label-success me-1">Valid</span>
              @elseif($organisasi_user->status_validasi === "invalid")
               {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
              <span class="badge bg-label-danger me-1">Invalid</span>
              @endif
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
            {{--
                <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{--
                <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            {{-- <td>
              <a
                href="/data-pribadi/organisasi/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td> --}}
            <td>Belum Ada</td>
            <td>
                <a href="/data-pribadi/organisasi/{{ $organisasi_user->id }}"
                ><i class="bx bxs-show me-1" title="Lihat"></i
                ></a>
                <a href="/data-pribadi/organisasi/{{ $organisasi_user->id }}/edit"
                ><i class="bx bx-edit-alt me-1" title="Edit"></i
                ></a>
                <form action="/data-pribadi/organisasi/{{ $organisasi_user->id }}" method="POST" class="d-inline">
                  @method('delete')
						      @csrf
                  <button class="bx bx-trash me-1 text-danger border-0 bg-transparent px-0 " title="Hapus" onclick="return confirm('Are you sure ?')"></button>
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
        Data Organisasi Tidak Ada, Silakan <a href="/data-pribadi/organisasi/create" class="fw-semibold text-decoration-underline">Tambah Data</a> Organisasi
    </div>
    @endif
  </div>
@endsection
