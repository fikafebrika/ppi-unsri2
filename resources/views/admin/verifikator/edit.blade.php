@extends('admin.layout')

@section('pageHeading')
  {{ __('Edit Verifikator') }}
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
            <div class="card">
                <form
                  id="formAccountSettings"
                  method="POST"
                  onsubmit="return false"
                >
                  <h5 class="card-header">Edit Verifikator</h5>
                  <div class="card-body pb-3">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label
                          for="nama-lengkap"
                          class="form-label"
                          >Nama Lengkap</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="nama-lengkap"
                          name="nama-lengkap"
                          placeholder="Nama Lengkap" value="Verifikator Satu"
                        />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label
                          for="nip"
                          class="form-label"
                          >Nomor Induk Pegawai</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="nip"
                          name="nip"
                          placeholder="Nomor Induk Pegawai" value="1234567890"
                        />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label
                          for="email"
                          class="form-label"
                          >Email</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="email"
                          name="email"
                          placeholder="Email" value="verifikatorsatu@gmail.com"
                        />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label
                          for="password"
                          class="form-label"
                          >Password</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="password"
                          name="password"
                          placeholder="Password" value="pass123"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between m-4 mt-0">
                    <div>
                      <a
                        href="/admin/verifikator"
                        class="btn btn-secondary"
                        >Kembali</a
                      >
                    </div>
                    <div>
                      <button
                        type="reset"
                        class="btn btn-outline-primary me-2"
                      >
                        Reset
                      </button>
                      <a
                        href="/admin/verifikator"
                        class="btn btn-primary text-white"
                        >Simpan</a
                      >
                    </div>
                  </div>
                </form>
                <!-- /Account -->
              </div>
            </div>
      </div>
    </div>
</div>
@endsection
