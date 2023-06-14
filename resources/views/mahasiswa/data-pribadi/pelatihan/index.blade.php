@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Pelatihan') }}
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
        Pendidikan/ Pelatihan Teknik/ Manajemen
      </h5>
      <a href="/data-pribadi/pelatihan/create" class="btn btn-primary mx-4 mt-2">Tambah Data</a>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if ($pelatihan_users->count())
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Nama Pendidikan/ Pelatihan</th>
            <th>Penyelenggara</th>
            <th>Lokasi</th>
            <th>Negara</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pelatihan_users as $pelatihan_user)
              
          
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            {{-- I.5 Kolom B --}}
            <td><strong>{{ $pelatihan_user->nama_pendidikan }}</strong></td>
            {{-- I.5 Kolom C --}}
            <td>{{ $pelatihan_user->penyelenggara }}</td>
            {{-- I.5 Kolom D --}}
            <td>{{ $pelatihan_user->lokasi }}</td>
            {{-- I.5 Kolom E --}}
            <td>{{ $pelatihan_user->negara }}</td>
            {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
            @if ($pelatihan_user->bukti_pelatihan)
              <td>Ada</td>
            @else
            <td>Belum Ada</td> 
            @endif
            {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
            {{-- <td>Ada</td> --}}
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              @if ($pelatihan_user->status_validasi === "pending")
              <span class="badge bg-label-warning me-1"
              >Pending</span>
              @elseif($pelatihan_user->status_validasi === "invalid")
              <span class="badge bg-label-danger me-1"
              >Invalid</span>
              @elseif($pelatihan_user->status_validasi === "valid")
              <span class="badge bg-label-success me-1"
              >Valid</span>
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
                href="/data-pribadi/pelatihan/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td> --}}
            <td>
                <a href="/data-pribadi/pelatihan/{{ $pelatihan_user->id }}"
                ><i class="bx bxs-show me-1" title="Lihat"></i
                ></a>
                <a href="/data-pribadi/pelatihan/{{ $pelatihan_user->id }}/edit"
                ><i class="bx bx-edit-alt me-1" title="Edit"></i
                ></a>
                <form action="/data-pribadi/pelatihan/{{ $pelatihan_user->id }}" method="post" class="d-inline">
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
    <p class="text-center fs-4">Data Pendidikan Formal Tidak Ada, Silahkan Masukkan Data Pendidikan Formal</p>
    @endif
    
  </div>
@endsection

