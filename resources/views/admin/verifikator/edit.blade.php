@extends('admin.layout')

@section('pageHeading')
  {{ __('Edit Verifikator') }}
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="order-3 order-md-2">
        <div class="col-12">
            <div class="card">
              <h5 class="card-header">Edit Verifikator</h5>
                <form
                  id="formAccountSettings"
                  method="POST"
                  action="/admin/verifikator/{{ $verifikator->id }}"
                >
                @method('put')
                @csrf
                  <div class="card-body pb-3">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label
                          for="nama_lengkap"
                          class="form-label"
                          >Nama Lengkap</label
                        >
                        <input
                          type="text"
                          class="form-control @error('nama_pelatihan') is-invalid @enderror"
                          id="nama_lengkap"
                          name="nama_lengkap"
                          value="{{ old('nama_lengkap', $verifikator->nama_lengkap) }}"
                        />
                        @error('nama_lengkap')
                        <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3 col-md-6">
                        <label
                          for="nomor_induk_pegawai"
                          class="form-label"
                          >Nomor Induk Pegawai</label
                        >
                        <input
                          type="text"
                          class="form-control @error('nama_pelatihan') is-invalid @enderror"
                          id="nomor_induk_pegawai"
                          name="nomor_induk_pegawai"
                          placeholder="Nomor Induk Pegawai"
                          value="{{ old('nomor_induk_pegawai', $verifikator->nomor_induk_pegawai) }}"
                        />
                        @error('nomor_induk_pegawai')
                        <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3 col-md-6">
                        <label
                          for="email"
                          class="form-label"
                          >Email</label
                        >
                        <input
                          type="text"
                          class="form-control @error('nama_pelatihan') is-invalid @enderror"
                          id="email"
                          name="email"
                          placeholder="Email"
                          value="{{ old('email', $verifikator->email) }}"
                        />
                        @error('email')
                        <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3 col-md-6">
                        <label
                          for="password"
                          class="form-label"
                          >Password</label
                        >
                        <input
                          type="password"
                          class="form-control @error('password') is-invalid @enderror"
                          id="password"
                          name="password"
                          placeholder="Password" 
                          value="{{ old('password', $verifikator->password) }}"
                        />
                        @error('password')
                        <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
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
                      <button
                        type="submit"
                        class="btn btn-primary text-white"
                        >Simpan</button
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
