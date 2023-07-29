@extends('admin.layout')

@section('pageHeading')
  {{ __('Daftar Verifikator') }}
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="order-3 order-md-2">
        <div class="col-12">
          <div class="card" id="daftarMahasiswa">
            <div
              class="d-flex align-items-center justify-content-between"
            >
              <h5 class="card-header">Daftar Verifikator</h5>
              
              
              <div class="px-4 pb-2 pb-lg-0">
                <a
                  href="/admin/verifikator/create"
                  class="btn btn-outline-primary"
                  >Tambah</a
                >
              </div>
            </div>
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if ($verifikators->count())
            <div class="table-responsive mx-3 mb-2 text-center">
              <table class="table table-hover">
                <thead class="align-middle">
                  <tr>
                    <th>#</th>
                    <th>Nama Lengkap (Dengan Jabatan)</th>
                    <th>Nomor Induk Pegawai</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($verifikators as $verifikator)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $verifikator->nama_lengkap }}</td>
                    <td>{{ $verifikator->nomor_induk_pegawai }}</td>
                    <td>{{ $verifikator->email }}</td>
                      <td>
                      <a
                        href="/admin/verifikator/{{ $verifikator->id }}/edit"
                        class="btn btn-sm btn-primary"
                        >Detail</a>
                        <form action="/admin/verifikator/{{ $verifikator->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn-sm btn-danger border-0 " title="Hapus" onclick="return confirm('Are you sure ?')">Hapus</button>
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
          </div> 
          @else
          <p class="text-center fs-4">Verifikator Tidak Ada, Silahkan Tambah Verifikator</p>
          @endif
            
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
