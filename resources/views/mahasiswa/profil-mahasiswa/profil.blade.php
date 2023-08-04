@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Profil') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
  <h5 class="card-header">Data Profil</h5>
    <form
      id="formAccountSettings"
      method="POST"
      action="/profil/{{ $user->id }}/edit"
      enctype="multipart/form-data"
    >
    @csrf
    @method('PUT')
      <div class="card-body pt-0">
        <div
          class="d-flex align-items-start align-items-sm-center gap-4"
        >
        {{-- Pasfoto Terbaru 3x4 cm pas Register --}}
            @if ($user->image)
            <img
            src="{{ asset('storage/' . $user->image) }}"
            alt="user-avatar"
            class="d-block rounded"
            height="133"
            width="100"
            id="image-preview"
            name="image-preview"
          />
            @else
            <p>Tidak ada file Photo yang diunggah.</p>
            @endif

          <div class="button-wrapper">
              <input
              class="form-control @error('image') is-invalid @enderror"
                type="file"
                id="image"
                name="image"
                accept="image/png, image/jpeg"
              />
              {{-- <i class="bx bx-upload d-block d-sm-none"></i> --}}
              @error('image')
              <div class="invalid-feedback"> {{ $message }}</div>
              @enderror
            {{-- <button
              type="button"
              class="btn btn-outline-secondary account-image-reset mb-4"
            >
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button> --}}
            <p class="text-muted mt-2 mb-0">*Foto Ukuran 3x4.</p>
          </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body pb-3">
        <div class="row">
            <h5>Akun</h5>
            {{-- Nama Lengkap pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Lengkap" value="{{ old('name', $user->name) }}"/>
                @error('name')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            {{-- No. KTA pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="nokta" class="form-label">No. KTA (6 Digit Terakhir)</label>
                <input type="text" class="form-control @error('nokta') is-invalid @enderror" id="nokta" name="nokta" placeholder="No. KTA (6 Digit Terakhir)" value="{{ old('nokta', $user->nokta) }}"/>
                @error('nokta')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            {{-- Nomor Induk Mahasiswa pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="nikmhs" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control @error('nikmhs') is-invalid @enderror" id="nikmhs" name="nikmhs" placeholder="Nomor Induk Mahasiswa" value="{{ old('nikmhs', $user->nikmhs) }}"/>
                @error('nikmhs')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            {{-- Profesi Utama pas Register --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="profesiutama">Profesi Utama</label>
                <select id="profesiutama" name="profesitama" class="select2 form-select">
                  <option value="">Pilih Profesi Utama</option>
                  <option value="dosen" {{ old('profesiutama', $user->profesiutama) == "dosen" ? ' selected' : '' }}>
                    Dosen
                  </option>
                  <option value="praktisi" {{ old('profesiutama', $user->profesiutama) == "praktisi" ? ' selected' : '' }}>
                    Praktisi
                  </option>
                </select>
            </div>
            {{-- Email pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}"/>
                @error('email')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body pb-3">
        <div class="row">
            <h5>Umum</h5>
            {{-- I.1 C3-F3 --}}
            <div class="mb-3 col-md-6">
                <label for="periode-mulai" class="form-label">Periode</label>
                <div class="d-flex align-items-baseline">
                    <input class="form-control" type="number" id="periode-mulai" name="periode-mulai" placeholder="Tahun Mulai"
                    value=""/>
                    <p class="px-2 pb-0 mb-0">s/d.</p>
                    <input class="form-control" type="number"
                    id="periode-berakhir" name="periode-berakhir" placeholder="Tahun Berakhir" value=""/>
                </div>
            </div>
            <div class="col-md-6"></div>
            {{-- I.1 B5 --}}
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Lengkap" value="{{ old('name', $user->name) }}"/>
                @error('name')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            {{-- I.1 B6 --}}
            <div class="mb-3 col-md-6">
                <label for="ttl" class="form-label">Tempat & Tanggal Lahir</label>
                <input type="text" class="form-control " id="ttl" name="ttl" placeholder="Tempat & Tanggal Lahir" value=""/>
            </div>
            {{-- I.1 B7 --}}
            <div class="mb-3 col-md-6">
                <label for="nokta" class="form-label">No. KTA (6 Digit Terakhir)</label>
                <input type="text" class="form-control @error('nokta') is-invalid @enderror" id="nokta" name="nokta" placeholder="No. KTA (6 Digit Terakhir)" value="{{ old('name', $user->nokta) }}"/>
                @error('nokta')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            {{-- I.1 B8 --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="badan-kejurusan">Badan Kejurusan</label>
                <input type="text" class="form-control" id="badan-kejurusan" name="badan-kejurusan" placeholder="Badan Kejurusan" value=""/>
            </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body pb-3">
        <div class="row">
            <h5>Rumah</h5>
            {{-- I.1 B12 --}}
            <div class="mb-3">
                <label for="alamat-rumah" class="form-label">Alamat Rumah</label>
                <input type="text" class="form-control" id="alamat-rumah" name="alamat-rumah" placeholder="Alamat Rumah" value=""/>
            </div>
            {{-- I.1 C17 --}}
            <div class="mb-3 col-md-6">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value=""/>
            </div>
            {{-- I.1 E17 --}}
            <div class="mb-3 col-md-6">
                <label for="kode-pos" class="form-label">Kode Pos</label>
                <input class="form-control" type="text" id="kode-pos" name="kode-pos" placeholder="Kode Pos" value=""/>
            </div>
            {{-- I.1 C18 --}}
            <div class="mb-3 col-md-6">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value=""/>
            </div>
            {{-- I.1 C19 --}}
            <div class="mb-3 col-md-6">
                <label for="telex" class="form-label">Telex</label>
                <input type="text" class="form-control" id="telex" name="telex" placeholder="Telex" value=""/>
            </div>
            {{-- I.1 C20 --}}
            <div class="mb-3 col-md-6">
                <label for="no-hp" class="form-label">No. HP</label>
                <input type="text" class="form-control" id="no-hp" name="no-hp" placeholder="No. HP" value=""/>
            </div>
            {{-- I.1 E19 --}}
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}"/>
                @error('email')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            {{-- I.1 E18 --}}
            <div class="mb-3 col-md-6">
                <label for="faksimili" class="form-label">Faksimili</label>
                <input type="text" class="form-control" id="faksimili" name="faksimili" placeholder="Faksimili" value=""/>
            </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body pb-3">
        <div class="row">
            <h5>Lembaga (Instansi/ Perusahaan)</h5>
            {{-- I.1 F13 --}}
            <div class="mb-3 col-md-6">
                <label for="nama-lembaga" class="form-label">Nama Lembaga</label>
                <input type="text" class="form-control" id="nama-lembaga" name="nama-lembaga" placeholder="Nama Lembaga" value=""/>
            </div>
            {{-- I.1 F16 --}}
            <div class="mb-3 col-md-6">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value=""/>
            </div>
            {{-- I.1 G17 --}}
            <div class="mb-3 col-md-6">
                <label for="kota2" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota2" name="kota2" placeholder="Kota" value=""/>
            </div>
            {{-- I.1 I17 --}}
            <div class="mb-3 col-md-6">
                <label for="kode-pos2" class="form-label">Kode Pos</label>
                <input class="form-control" type="text" id="kode-pos2" name="kode-pos2" placeholder="Kode Pos" value=""/>
            </div>
            {{-- I.1 G18 --}}
            <div class="mb-3 col-md-6">
                <label for="telepon2" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon2" name="telepon2" placeholder="Telepon" value=""/>
            </div>
            {{-- I.1 G19 --}}
            <div class="mb-3 col-md-6">
                <label for="telex2" class="form-label">Telex</label>
                <input type="text" class="form-control" id="telex2" name="telex2" placeholder="Telex" value=""/>
            </div>
            {{-- I.1  --}}
            {{-- <div class="mb-3 col-md-6">
                <label for="no-hp" class="form-label">No. HP</label>
                <input type="text" class="form-control bg-white" disabled id="no-hp" name="no-hp" placeholder="No. HP" value="087894614101"/>
            </div> --}}
            {{-- I.1 I19 --}}
            <div class="mb-3 col-md-6">
                <label for="email3" class="form-label">Email</label>
                <input type="email" class="form-control" id="email3" name="email3" placeholder="Email" value=""/>
            </div>
            {{-- I.1 I18 --}}
            <div class="mb-3 col-md-6">
                <label for="faksimili2" class="form-label">Faksimili</label>
                <input type="text" class="form-control" id="faksimili2" name="faksimili2" placeholder="Faksimili" value=""/>
            </div>
        </div>
        <div class="mt-3 mb-1 d-flex justify-content-end">
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
<script>
  // Dapatkan elemen input file
      const pdfFileInput = document.getElementById('image');

      // Tambahkan event listener untuk saat ada perubahan pada input file
      pdfFileInput.addEventListener('change', function(e) {
      // Dapatkan file yang dipilih oleh pengguna
      const selectedFile = e.target.files[0];

      // Buat objek URL untuk file yang dipilih
      const fileUrl = URL.createObjectURL(selectedFile);

      // Perbarui sumber data iframe dengan URL file yang baru
      document.getElementById('image-preview').src = fileUrl;
      });
</script>
@endsection

