@extends('verifikator.auth.layout.layout')

@section('pageHeading')
  {{ __('Register') }}
@endsection

@section('content')
<div class="card-body">
    <!-- Logo -->
    <div class="app-brand justify-content-center mb-4">
      <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo">
          <img src="{{asset('verifikator/assets/img/unsri.png')}}" alt="" width="100" />
        </span>
        <span class="app-brand-text text-body fw-bolder fs-3">PPI UNSRI</span>
      </a>
    </div>
    <!-- /Logo -->
    <h4 class="mb-2">Program Profesi Insinyur UNSRI</h4>
    <p>Silakan Register</p>

    <form id="formAuthentication" class="mb-3" action="/verifikator/login" method="">
      <div class="mb-3">
        <label for="nama-lengkap" class="form-label">Nama Lengkap (Dengan Jabatan)</label>
        <input
          type="text"
          class="form-control"
          id="nama-lengkap"
          name="nama-lengkap"
          placeholder="Masukkan Nama Lengkap (Dengan Jabatan)"
          autofocus
        />
      </div>
      <div class="mb-3">
        <label for="nip" class="form-label">Nomor Induk Pegawai</label>
        <input
          type="text"
          class="form-control"
          id="nip"
          name="nip"
          placeholder="Masukkan Nomor Induk Pegawai"
          autofocus
        />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" autofocus />
      </div>
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
      <a href="/verifikator/login">
        <span>Silakan Login</span>
      </a>
    </p>
</div>
@endsection

