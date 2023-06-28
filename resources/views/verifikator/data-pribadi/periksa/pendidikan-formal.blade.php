@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Pendidikan Formal') }}
@endsection

@section('sidebar')
<li class="menu-item">
    <a href="/verifikator/beranda" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Beranda">Beranda</div>
    </a>
</li>
<li class="menu-item active open">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Klaim Pencapaian">FAIP Pencapaian</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Data Pribadi">Data Pribadi</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item active">
                    <a href="/verifikator/data-pribadi/pendidikan-formal" class="menu-link">
                        <div data-i18n="Pendidikan Formal">Pendidikan Formal</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/organisasi" class="menu-link">
                        <div data-i18n="Organisasi">Organisasi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/tanda-penghargaan" class="menu-link">
                        <div data-i18n="Tanda Penghargaan">Tanda Penghargaan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/pelatihan" class="menu-link">
                        <div data-i18n="Pelatihan">Pelatihan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/sertifikat" class="menu-link">
                        <div data-i18n="Sertifikat">Sertifikat</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Kode Etik Insinyur">Kode Etik Insinyur</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item">
                    <a href="/verifikator/kode-etik-insinyur/referensi" class="menu-link">
                        <div data-i18n="Referensi">Referensi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/kode-etik-insinyur/pengertian" class="menu-link">
                        <div data-i18n="Pengertian">Pengertian</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/verifikator/kualifikasi-profesional" class="menu-link">
                <div data-i18n="Kualifikasi Profesional">Kualifikasi Profesional</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/verifikator/pengalaman-mengajar" class="menu-link">
                <div data-i18n="Pengalaman Mengajar">Pengalaman Mengajar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Publikasi">Publikasi</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item">
                    <a href="/verifikator/publikasi/karya-tulis" class="menu-link">
                        <div data-i18n="Karya Tulis">Karya Tulis</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/publikasi/makalah" class="menu-link">
                        <div data-i18n="Makalah/ Tulisan">Makalah/ Tulisan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/publikasi/seminar" class="menu-link">
                        <div data-i18n="Seminar/ Lokakarya">Seminar/ Lokakarya</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/publikasi/karya-temuan" class="menu-link">
                        <div data-i18n="Karya Temuan">Karya Temuan</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/verifikator/bahasa" class="menu-link">
                <div data-i18n="Bahasa">Bahasa</div>
            </a>
        </li>
    </ul>
</li>
<li class="menu-item">
    <a href="/verifikator/akun" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Akun">Akun</div>
    </a>
</li>
<li class="menu-item">
    <a href="/verifikator/login" class="menu-link">
        <i class="menu-icon tf-icons bx bx-power-off"></i>
        <div data-i18n="Logout">Logout</div>
    </a>
</li>
@endsection

@section('content')
<div class="card">
  <h5 class="card-header">Data Pencapaian</h5>
    <form
      id="formAccountSettings"
      method="post" 
      action="/verifikator/data-pribadi/pendidikan-formal/periksa/{{ $pendidikan_formal->id }}/edit"
      enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card-body pb-3">
        <div class="row">
          {{-- I.2 C2 (Untuk S1) --}}
          {{-- I.2 D2 (Untuk S2) --}}
          {{-- I.2 E2 (Untuk S3) --}}
            <div class="mb-3 col-md-6">
            <label class="form-label" for="jenjang">Jenjang</label>
            <input
              type="text"
              class="form-control bg-white"
              id="jenjang"
              name="jenjang"
              value="{{ $pendidikan_formal->jenjang }}"
              disabled
            />
          </div>
          {{-- I.2 C3 (Untuk S1) --}}
          {{-- I.2 D3 (Untuk S2) --}}
          {{-- I.2 E3 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label
              for="nama_perguruan_tinggi"
              class="form-label"
              >Nama Perguruan Tinggi</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="nama_perguruan_tinggi"
              name="nama_perguruan_tinggi"
              placeholder="Nama Perguruan Tinggi"
              value="{{ $pendidikan_formal->nama_perguruan_tinggi }}"
              disabled
            />
          </div>
          {{-- I.2 C4 (Untuk S1) --}}
          {{-- I.2 D4 (Untuk S2) --}}
          {{-- I.2 E4 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="fakultas" class="form-label"
              >Fakultas</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="fakultas"
              name="fakultas"
              placeholder="Fakultas"
              value="{{ $pendidikan_formal->fakultas }}"
              disabled
            />
          </div>
          {{-- I.2 C5 (Untuk S1) --}}
          {{-- I.2 D5 (Untuk S2) --}}
          {{-- I.2 E5 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="jurusan" class="form-label"
              >Jurusan</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="jurusan"
              name="jurusan"
              placeholder="Jurusan"
              value="{{ $pendidikan_formal->jurusan }}"
              disabled
            />
          </div>
          {{-- I.2 C6 (Untuk S1) --}}
          {{-- I.2 D6 (Untuk S2) --}}
          {{-- I.2 E6 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="kota" class="form-label"
              >Kota</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="kota"
              name="kota"
              placeholder="Kota"
              value="{{ $pendidikan_formal->kota }}"
              disabled
            />
          </div>
          {{-- I.2 C7 (Untuk S1) --}}
          {{-- I.2 D7 (Untuk S2) --}}
          {{-- I.2 E7 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="negara" class="form-label"
              >Negara</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="negara"
              name="negara"
              placeholder="Negara"
              value="{{ $pendidikan_formal->negara }}"
              disabled
            />
          </div>
          {{-- I.2 C8 (Untuk S1) --}}
          {{-- I.2 D8 (Untuk S2) --}}
          {{-- I.2 E8 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="tahun" class="form-label"
              >Tahun Lulus</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="tahun"
              name="tahun"
              placeholder="Tahun Lulus"
              value="{{ $pendidikan_formal->tahun_lulus }}"
              disabled
            />
          </div>
          {{-- I.2 C9 (Untuk S1) --}}
          {{-- I.2 D9 (Untuk S2) --}}
          {{-- I.2 E9 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="gelar" class="form-label">Gelar</label>
            <input
              type="text"
              class="form-control bg-white"
              id="gelar"
              name="gelar"
              placeholder="Gelar"
              value="{{ $pendidikan_formal->gelar }}"
              disabled
            />
          </div>
          {{-- I.2 C10 (Untuk S1) --}}
          {{-- I.2 D10 (Untuk S2) --}}
          {{-- I.2 E10 (Untuk S3) --}}
          <div class="mb-3">
            <label for="judul-ta" class="form-label"
              >Judul Tugas Akhir/ Skripsi/ Tesis/
              Disertasi</label
            >
            <textarea
              name="judul-ta"
              id="judul-ta"
              class="form-control bg-white"
              placeholder="Judul Tugas Akhir/ Skripsi/ Tesis/ Disertasi"
              disabled
            >
            {{ $pendidikan_formal->judul }}</textarea
            >
          </div>
          {{-- I.2 C11 (Untuk S1) --}}
          {{-- I.2 D11 (Untuk S2) --}}
          {{-- I.2 E11 (Untuk S3) --}}
          <div class="mb-3">
            <label for="uraian-ta" class="form-label"
              >Uraian Singkat Tentang Materi Tugas Akhir/
              Skripsi/ Tesis/ Disertasi</label
            >
            <textarea rows="5"
              name="uraian-ta"
              id="uraian-ta"
              class="form-control bg-white"
              placeholder="Uraian Singkat Tentang Materi Tugas Akhir/ Skripsi/ Tesis/ Disertasi"
              disabled
            >
            {{ $pendidikan_formal->uraian_singkat }}</textarea
            >
          </div>
          {{-- I.2 C12 (Untuk S1) --}}
          {{-- I.2 D12 (Untuk S2) --}}
          {{-- I.2 E12 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="nilai" class="form-label"
              >Nilai Akademik Rata-rata</label
            >
            <input
              type="number"
              class="form-control bg-white"
              id="nilai"
              name="nilai"
              placeholder="Nilai Akademik Rata-rata"
              value="{{ $pendidikan_formal->nilai_akademik }}"
              disabled
            />
          </div>
          {{-- I.2 C13 (Untuk S1) --}}
          {{-- I.2 D13 (Untuk S2) --}}
          {{-- I.2 E13 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="judicium" class="form-label"
              >Judicium</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="judicium"
              name="judicium"
              placeholder="Judicium"
              value="{{ $pendidikan_formal->judicium }}"
              disabled
            />
          </div>
          <div class="mb-3">
            <label for="bukti" class="form-label"
              >Bukti Pencapaian</label
            >
            <div>
                <a href="#" class="btn btn-outline-primary">Download File</a>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="hasil-validasi"
            >Hasil Validasi Anda Terhadap Pencapaian
            Mahasiswa</label>
          <select
            id="status_validasi"
            name="status_validasi"
            class="select2 form-select">
            <option value="pending" selected>
              {{ $pendidikan_formal->status_validasi }}
            </option>
            <option value="invalid" class="text-danger fw-bold">
              INVALID (*Bila ada kesalahan pada pencapaian
              mahasiswa atau ada pencapaian yang tidak sesuai)
            </option>
            <option value="valid" class="text-success fw-bold">
              VALID (*Bila semua pencapaian mahasiswa telah
              sesuai)
            </option>
          </select>
        </div>
        <div class="mb-3 col-md-12">
          <label
            for="catatan-verifikator"
            class="form-label text-danger"
            >Catatan Tim Verifikator (*Bila Ada)</label
          >
          <textarea
            id="catatan-verifikator"
            class="form-control"
            placeholder="Berikan Catatan Kepada Mahasiswa Terkait Kesesuaian Maupun Kesalahan Dalam Mengklaim Pencapaian Mahasiswa"
            rows="5"
          ></textarea>
        </div>
        <div class="mt-4 d-flex justify-content-between">
          <div class="me-2">
            <a href="/verifikator/data-pribadi/pendidikan-formal" class="btn btn-secondary"
              >Kembali</a
            >
          </div>
          <div class="d-flex">
            <button
              type="reset"
              class="btn btn-outline-primary me-2"
            >
              Reset
            </button>
            <button
              class="btn btn-primary text-white"
              >Simpan</button>
          </div>
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>

@endsection

