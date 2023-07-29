@extends('admin.layout')

@section('pageHeading')
  {{ __('Beranda') }}
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-8">
              <div class="card-body">
                <h5 class="card-title text-primary">
                  Selamat Datang, Admin! 🎉
                </h5>
                <p>
                  Daftar Mahasiswa PPI UNSRI Telah Tersedia.<br />
                  Segera Tentukan Dosen Verifikator Masing-Masing
                  Mahasiswa.
                </p>
                <div class="d-flex">
                    <a
                    href="#daftarMahasiswa"
                    class="btn btn-outline-primary me-2"
                    >Daftar Mahasiswa</a
                  >
                    <a
                    href="/admin/verifikator"
                    class="btn btn-outline-primary"
                    >Daftar Verifikator</a
                  >
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{asset('admin/assets/img/illustrations/man-with-laptop-light.png')}}"
                  height="130"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="order-3 order-md-2">
        <div class="col-12">
          <div class="card" id="daftarMahasiswa">
            <div
              class="d-flex align-items-center justify-content-between"
            >
              <h5 class="card-header">Daftar Mahasiswa</h5>
            </div>
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if ($list_user->count())
            <div class="table-responsive mx-3 mb-2 text-center">
              <table class="table table-hover">
                <thead class="align-middle">
                  <tr>
                    <th class="text-lg-start">Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kejurusan</th>
                    <th>Profesi</th>
                    <th>Pilih Verifikator</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list_user as $user)
                  <tr>
                    <td class="text-lg-start">
                      
                      {{-- <img
                        alt="photo user"
                        id="image"
                        name="image"
                        class="rounded me-lg-2 my-2"
                        width="90"
                        height="120"
                      /> --}}
                      @if ($user->image)
                        <img
                        src="{{ asset('storage/' . $user->image) }}"
                        alt="user-avatar"
                        class="d-block rounded"
                        width="90"
                        height="120"
                        id="image-preview"
                        name="image-preview"
                      />
                      @else
                      <p>Tidak ada file Photo yang diunggah.</p>
                      @endif
                      
                    </td>
                    <td><strong>{{ $user->name }}</strong></td>
                    <td>{{ $user->badan_kejurusan }}</td>
                    <td>{{ $user->profesiutama }}</td>
                    <td>
                      {{-- <a href="/admin/beranda/{{ $user->id }}/edit" class="btn btn-primary">Pilih Verifikator</a> --}}
                      <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary btn-open-modal" data-mahasiswa-id="{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#modalAddVerifier">
                          Pilih Verifikator
                        </button> --}}
                        <a href="/admin/beranda/{{ $user->id }}" class="btn btn-primary">Pilih Verifikator</a>
                    
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div> 
            @else
            <p class="text-center fs-4">Data Mahasiswa Tidak Ada</p> 
            @endif
            <hr class="mx-3">
            <div class="d-flex justify-content-between my-1 mx-3 mx-lg-4">
              <div><small>Showing 1 to 2 of 2 entries</small></div>
              <div>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm">
                    <li class="page-item prev">
                      <a
                        class="page-link"
                        href="javascript:void(0);"
                        ><i class="tf-icon bx bx-chevron-left"></i
                      ></a>
                    </li>
                    <li class="page-item active">
                      <a
                        class="page-link"
                        href="javascript:void(0);"
                        >1</a
                      >
                    </li>
                    <li class="page-item">
                      <a
                        class="page-link"
                        href="javascript:void(0);"
                        >2</a
                      >
                    </li>
                    <li class="page-item">
                      <a
                        class="page-link"
                        href="javascript:void(0);"
                        >3</a
                      >
                    </li>
                    <li class="page-item next">
                      <a
                        class="page-link"
                        href="javascript:void(0);"
                        ><i class="tf-icon bx bx-chevron-right"></i
                      ></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>





@endsection
