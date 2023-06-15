@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Referensi') }}
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
        Referensi Kode Etik & Etika Profesi
      </h5>
      
      <a href="/kode-etik-insinyur/referensi/create" class="btn btn-primary mx-4 mt-2">Tambah Data</a>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($referensi_users->count())
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Email</th>
            <th>Hubungan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($referensi_users as $referensi_user)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              {{-- II.1 Kolom B --}}
              <td><strong>{{ $referensi_user->nama_referensi }}</strong></td>
              {{-- II.2 Kolom C --}}
              <td>{{ $referensi_user->alamat_referensi }}</td>
              {{-- II.2 Kolom D --}}
              <td>{{ $referensi_user->no_telp_referensi }}</td>
              {{-- II.2 Kolom E --}}
              <td>{{ $referensi_user->email_referensi }}</td>
              {{-- II.2 Kolom F --}}
              <td>{{ $referensi_user->hubungan }}</td>
              {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
              
              <td>
                @if ($referensi_user->status_validasi ==="valid")
                <span class="badge bg-label-success me-1"
                >Valid</span
              >
                @elseif($referensi_user->status_validasi ==="invalid")
                <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
                @elseif($referensi_user->status_validasi ==="pending")
                <span class="badge bg-label-warning me-1"
                >Pending</span
              >
                @endif
                
              </td>
            <td>
              
                <a href="/kode-etik-insinyur/referensi/{{ $referensi_user->id }}"
                ><i class="bx bxs-show me-1" title="Lihat"></i
                ></a>
                <a href="/kode-etik-insinyur/referensi/{{ $referensi_user->id }}/edit"
                ><i class="bx bx-edit-alt me-1" title="Edit"></i
                ></a>
                <form action="/kode-etik-insinyur/referensi/{{ $referensi_user->id }}" method="POST" class="d-inline">
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
    <p class="text-center fs-4">Data Referensi Tidak Ada, Silahkan Masukkan Data Referensi Anda</p>
    @endif
    
  </div>
@endsection

