@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Organisasi') }}
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
        Organisasi Profesi & Organisasi Lainnya yang Dimasuki
      </h5>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if ($list_organisasi_user->count())
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
        @foreach ($list_organisasi_user as $organisasi_user)
            
       
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          {{-- I.3 Kolom B --}}
          <td><strong>{{ $organisasi_user->nama_organisasi }}</strong></td>
          {{-- I.3 Kolom C --}}
          <td>{{ $organisasi_user->jenis_organisasi }}</td>
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

          {{-- Status Data FAIP, Kalo belum diverifikasi atau divalidasi, statusnyo masih "Pending" --}}
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
          <td>
            @foreach ($list_verifikasi as $verifikasi)
            <ul>
              <li>{{ $verifikasi->verifikator->nama_lengkap }}</li>
            </ul>
            @endforeach
            
          </td>
          {{-- Kalo ada, tampilin verifikator terakhir yg meriksa --}}
          {{-- <td>Verifikator Satu</td> --}}
            <td>
            <a
              href="/verifikator/data-pribadi/organisasi/{{ $organisasi_user->id }}/edit"
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

