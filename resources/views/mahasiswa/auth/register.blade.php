@extends('mahasiswa.auth.layout.layout')

@section('pageHeading')
  {{ __('Register') }}
@endsection

@section('content')
<div class="card-body">
    <!-- Logo -->
    <div class="app-brand justify-content-center mb-4">
      <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo">
          <img src="{{asset('mahasiswa/assets/img/unsri.png')}}" alt="" width="100" />
        </span>
        <span class="app-brand-text text-body fw-bolder fs-3">PPI UNSRI</span>
      </a>
    </div>
    <!-- /Logo -->
    <h4 class="mb-2">Program Profesi Insinyur UNSRI</h4>
    <p>Silakan Register</p>

    <form id="formAuthentication" class="mb-3" action="/" method="">
        {{-- Nama Lengkap Mahasiswa --}}
      <div class="mb-3">
        <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
        <input
          type="text"
          class="form-control"
          id="nama-lengkap"
          name="nama-lengkap"
          placeholder="Masukkan Nama Lengkap"
          autofocus
        />
      </div>
      {{-- Nomor Induk Mahasiswa --}}
      <div class="mb-3">
        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
        <input
          type="text"
          class="form-control"
          id="nim"
          name="nim"
          placeholder="Masukkan Nomor Induk Mahasiswa"
          autofocus
        />
      </div>
      {{-- No. KTA Mahasiswa (6 Digit Terakhir) --}}
      <div class="mb-3">
        <label for="no-kta" class="form-label">No. KTA (6 Digit Terakhir)</label>
        <input
          type="text"
          class="form-control"
          id="no-kta"
          name="no-kta"
          placeholder="Masukkan No. KTA (6 Digit Terakhir)"
          autofocus
        />
      </div>
      {{-- Profesi Utama Mahasiswa, nanti bakal nentuin komposisi penilaian di rekognisi pencapaian sama kartu hasil studi --}}
      <div class="mb-3">
        <label for="profesi" class="form-label">Profesi Utama</label>
        <select id="profesi" class="select2 form-select">
            <option value="" selected>
            Pilih Profesi Utama
            </option>
            <option value="dosen">
            Dosen
            </option>
            <option value="praktisi">
            Praktisi
            </option>
        </select>
      </div>
        {{-- Pasfoto Terbaru 3x4 cm --}}
        <div class="mb-3">
            <label for="foto" class="form-label">Upload Pasfoto Terbaru 3x4 cm</label>
            <input
                type="file"
                class="form-control"
                id="foto"
                name="foto"
                placeholder="Upload Pasfoto Terbaru 3x4 cm" accept="image/*"
                autofocus
            />
        </div>
      {{-- Email Mahasiswa --}}
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" autofocus />
      </div>
      {{-- Password Mahasiswa --}}
      <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
          <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
          <input
            type="password"
            id="password"
            class="form-control"
            name="password"
            placeholder="Masukkan Password"
            aria-describedby="password"
          />
          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
      </div>
      {{-- Konfirmasi Password --}}
      <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
          <label class="form-label" for="password2">Konfirmasi Password</label>
        </div>
        <div class="input-group input-group-merge">
          <input
            type="password"
            id="password2"
            class="form-control"
            name="password2"
            placeholder="Konfirmasi Password"
            aria-describedby="password"
          />
          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
      </div>

      <button class="btn btn-primary d-grid w-100">Register</button>
    </form>

    <p class="text-center">
      <span>Sudah Punya Akun?</span>
      <a href="/">
        <span>Silakan Login</span>
      </a>
    </p>
</div>
@endsection

