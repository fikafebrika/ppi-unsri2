@extends('admin.layout')

@section('pageHeading')
  {{ __('Daftar Verifikator') }}
@endsection

@section('sidebar')
<li class="menu-item">
    <a href="/admin/beranda" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Beranda">Beranda</div>
    </a>
</li>
<li class="menu-item active">
    <a href="/admin/verifikator" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Daftar Verifikator">Daftar Verifikator</div>
    </a>
</li>
<li class="menu-item">
    <a href="/admin/login" class="menu-link">
        <i class="menu-icon tf-icons bx bx-power-off"></i>
        <div data-i18n="Logout">Logout</div>
    </a>
</li>
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
                  href="/admin/verifikator/tambah"
                  class="btn btn-outline-primary"
                  >Tambah</a
                >
              </div>
            </div>
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
                    <tr>
                      <th scope="row">1</th>
                      <td>Nama Lengkap Verifikator Satu</td>
                      <td>1234567890</td>
                      <td>verifikatorsatu@gmail.com</td>
                        <td>
                        <a
                          href="/admin/verifikator/edit"
                          class="btn btn-sm btn-primary"
                          >Detail</a
                        >
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Nama Lengkap Verifikator Satu</td>
                      <td>1234567890</td>
                      <td>verifikatorsatu@gmail.com</td>
                        <td>
                        <a
                          href="/admin/verifikator/edit"
                          class="btn btn-sm btn-primary"
                          >Detail</a
                        >
                      </td>
                    </tr>
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
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
