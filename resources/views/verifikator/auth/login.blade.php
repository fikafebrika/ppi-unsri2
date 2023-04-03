@extends('verifikator.auth.layout.layout')

@section('pageHeading')
  {{ __('Login') }}
@endsection

@section('meta')
<meta name="description" content="Login" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <p>Silakan Login</p>

    <form id="formAuthentication" class="mb-3" action="/verifikator/beranda" method="">
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

      <div class="mb-3">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            id="remember-me"
          />
          <label class="form-check-label" for="remember-me">
            Ingat Saya
          </label>
        </div>
      </div>
      <button class="btn btn-primary d-grid w-100" type="submit">
        Login
      </button>
    </form>

    {{-- <p class="text-center">
        <span>Belum Punya Akun?</span>
        <a href="/verifikator/register">
          <span>Silakan Register</span>
        </a>
      </p> --}}

</div>
@endsection

