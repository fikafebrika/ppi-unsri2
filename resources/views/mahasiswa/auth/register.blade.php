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

    <form id="" class="mb-3" action="{{ route('register.process') }}" method="post" enctype="multipart/form-data">
      @csrf
        {{-- Nama Lengkap Mahasiswa --}}
      <div class="mb-3">
        <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
        <input
          type="text"
          class="form-control @error('name') is-invalid @enderror"
          id="name"
          name="name"
         
          value="{{ old('name') }}"
          placeholder="Masukkan Nama Lengkap"
          autofocus
        />
        {{-- <div class="invalid-feedback"> test</div> --}}
        
        
        {{-- //TODO 1 INVALID NAME BELOM MUNCUL --}}
        @error('name')
        <div class="invalid-feedback"> {{ $message }}</div>
        {{-- <p class="text-danger">{{ $message }}</p> --}}
        @enderror
      </div>
      {{-- username (dibuat otomatis) --}}
      <div class="mb-3">
        <input
          type="hidden"
          class="form-control @error('username') is-invalid @enderror"
          id="username"
          name="username"
          
          value="{{ old('username') }}"
          placeholder="Masukkan Username"
        />
        {{-- //TODO 2 INVALID USERNAME BELOM MUNCUL --}}
        @error('username')
        {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      {{-- Nomor Induk Mahasiswa --}}
      <div class="mb-3">
        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
        <input
          type="text"
          class="form-control @error('nikmhs') is-invalid @enderror"
          id="nikmhs"
          name="nikmhs"
          
          value="{{ old('nikmhs') }}"
          placeholder="Masukkan Nomor Induk Mahasiswa"
          autofocus
        />
        {{-- //TODO 3 INVALID NIKMHS BELOM MUNCUL --}}
        @error('nikmhs')
        {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      {{-- No. KTA Mahasiswa (6 Digit Terakhir) --}}
      <div class="mb-3">
        <label for="no-kta" class="form-label">No. KTA (6 Digit Terakhir)</label>
        <input
          type="text"
          class="form-control @error('nokta') is-invalid @enderror"
          id="nokta"
          name="nokta"
          
          value="{{ old('nokta') }}"
          placeholder="Masukkan No. KTA (6 Digit Terakhir)"
          autofocus
        />
        {{-- //TODO 4 INVALID NIKMHS BELOM MUNCUL --}}
        @error('nokta')
        {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      {{-- Profesi Utama Mahasiswa, nanti bakal nentuin komposisi penilaian di rekognisi pencapaian sama kartu hasil studi --}}
      <div class="mb-3">
        <label for="profesiutama" class="form-label">Profesi Utama</label>
        <select id="profesiutama" name="profesiutama" class="select2 form-select">
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
            <label for="image" class="form-label">Upload Pasfoto Terbaru 3x4 cm</label>
            <div class="d-flex justify-content-center">
              <img class="img-preview img-fluid mb-3 col-sm-5">
            </div>
            <input
                type="file"
                class="form-control @error('image') is-invalid @enderror"
                
                id="image"
                name="image"
                placeholder="Upload Pasfoto Terbaru 3x4 cm" accept="image/*"
                autofocus
                onchange="previewImage()"
            />
            {{-- //TODO 5 INVALID IMG BELOM MUNCUL --}}
            @error('image')
            {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
      {{-- Email Mahasiswa --}}
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          type="email"
          class="form-control @error('email') is-invalid @enderror"
          id="email" 
          name="email"
          
          value="{{ old('email') }}"
          placeholder="Masukkan Email"
          autofocus
          />
          {{-- //TODO 6 INVALID EMAIL BELOM MUNCUL --}}
          @error('email')
            {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
            <p class="text-danger">{{ $message }}</p>
          @enderror
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
            class="form-control @error('password') is-invalid @enderror"
            name="password"
            
            placeholder="Masukkan Password"
            aria-describedby="password"
          />
          
          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
          
        </div>
        {{-- //TODO 7 INVALID PASSWORD BELOM MUNCUL --}}
        @error('password')
          {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
          <p class="text-danger">{{ $message }}</p>
         @enderror
      </div>
      {{-- Konfirmasi Password --}}
      <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
          <label class="form-label" for="password2">Konfirmasi Password</label>
        </div>
        <div class="input-group input-group-merge">
          <input
            type="password"
            id="password"
            class="form-control @error('password_confirmation') is-invalid @enderror"
            name="password_confirmation"
            
            placeholder="Konfirmasi Password"
            aria-describedby="password"
          />
          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
          {{-- //TODO 8 INVALID KONFIRMASI PASSWORD BELOM MUNCUL --}}
          @error('password')
            {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
            <p class="text-danger">{{ $message }}</p>
          @enderror
      </div>

      <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
    </form>

    <p class="text-center">
      <span>Sudah Punya Akun?</span>
      <a href="/">
        <span>Silakan Login</span>
      </a>
    </p>
</div>


<script>
  const name = document.querySelector('#name');
  const username = document.querySelector('#username');

  name.addEventListener('change', function() {
		fetch('/register/checkSlug?name=' + name.value)
		.then(response => response.json())
		.then(data => username.value = data.username)
	});

  function previewImage() {
		const image = document.querySelector('#image');
		const imgpreview = document.querySelector('.img-preview');

		imgpreview.style.display = 'block';

		const oFReader = new FileReader();
		oFReader.readAsDataURL(image.files[0]);

		oFReader.onload = function(oFREvent) {
			imgpreview.src = oFREvent.target.result;
		}
	}

</script>
@endsection

