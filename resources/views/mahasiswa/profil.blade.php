@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Profil') }}
@endsection

@section('sidebar')
<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="/beranda" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Beranda">Beranda</div>
      </a>
    </li>
    <li class="menu-item active open">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Klaim Pencapaian">Klaim Pencapaian</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="/profil" class="menu-link">
            <div data-i18n="Profil">Profil</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Data Pribadi">Data Pribadi</div>
          </a>
          <ul class="menu-sub ps-2">
            <li class="menu-item">
              <a href="/data-pribadi/pendidikan-formal" class="menu-link">
                <div data-i18n="Pendidikan Formal">
                  Pendidikan Formal
                </div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/data-pribadi/organisasi" class="menu-link">
                <div data-i18n="Organisasi">Organisasi</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/data-pribadi/tanda-penghargaan" class="menu-link">
                <div data-i18n="Tanda Penghargaan">
                  Tanda Penghargaan
                </div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/data-pribadi/pelatihan" class="menu-link">
                <div data-i18n="Pelatihan">Pelatihan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/data-pribadi/sertifikat" class="menu-link">
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
              <a
                href="/kode-etik-insinyur/referensi"
                class="menu-link"
              >
                <div data-i18n="Referensi">Referensi</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="/kode-etik-insinyur/pengertian"
                class="menu-link"
              >
                <div data-i18n="Pengertian">Pengertian</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="/kualifikasi-profesional" class="menu-link">
            <div data-i18n="Kualifikasi Profesional">
              Kualifikasi Profesional
            </div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/pengalaman-mengajar" class="menu-link">
            <div data-i18n="Pengalaman Mengajar">
              Pengalaman Mengajar
            </div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Publikasi">Publikasi</div>
          </a>
          <ul class="menu-sub ps-2">
            <li class="menu-item">
              <a href="/publikasi/karya-tulis" class="menu-link">
                <div data-i18n="Karya Tulis">Karya Tulis</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/publikasi/makalah" class="menu-link">
                <div data-i18n="Makalah/ Tulisan">Makalah/ Tulisan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/publikasi/seminar" class="menu-link">
                <div data-i18n="Seminar/ Lokakarya">
                  Seminar/ Lokakarya
                </div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/publikasi/karya-temuan" class="menu-link">
                <div data-i18n="Karya Temuan">Karya Temuan</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="/bahasa" class="menu-link">
            <div data-i18n="Bahasa">Bahasa</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="/rekognisi-pencapaian" class="menu-link">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Rekognisi Pencapaian">Rekognisi Pencapaian</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="/kartu-hasil-studi" class="menu-link">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div data-i18n="Kartu Hasil Studi">Kartu Hasil Studi</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="/" class="menu-link">
        <i class="menu-icon tf-icons bx bx-power-off"></i>
        <div data-i18n="Logout">Logout</div>
      </a>
    </li>
</ul>
@endsection

@section('content')
<div class="card">
    <form
      id="formAccountSettings"
      method="POST"
      onsubmit="return false"
    >
      <h5 class="card-header">Data Profil</h5>
      <div class="card-body">
        <div
          class="d-flex align-items-start align-items-sm-center gap-4"
        >
        {{-- Pasfoto Terbaru 3x4 cm pas Register --}}
          <img
            src="{{asset('mahasiswa/assets/img/avatars/1.png')}}"
            alt="user-avatar"
            class="d-block rounded"
            height="133"
            width="100"
            id="uploadedAvatar"
          />
          <div class="button-wrapper">
            <label
              for="upload"
              class="btn btn-primary me-2 mb-4"
              tabindex="0"
            >
              <span class="d-none d-sm-block"
                >Perbarui Foto</span
              >
              <i class="bx bx-upload d-block d-sm-none"></i>
              <input
                type="file"
                id="upload"
                class="account-file-input"
                hidden
                accept="image/png, image/jpeg"
              />
            </label>
            {{-- <button
              type="button"
              class="btn btn-outline-secondary account-image-reset mb-4"
            >
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button> --}}
            <p class="text-muted mb-0">*Foto Ukuran 3x4.</p>
          </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body pb-3">
        <div class="row">
            <h5>Akun</h5>
            {{-- Nama Lengkap pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" placeholder="Nama Lengkap" value="Bambang Pamungkas"/>
            </div>
            {{-- No. KTA pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="no-kta" class="form-label">No. KTA (6 Digit Terakhir)</label>
                <input type="text" class="form-control" id="no-kta" name="no-kta" placeholder="No. KTA (6 Digit Terakhir)" value="924160"/>
            </div>
            {{-- Nomor Induk Mahasiswa pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" value="924160"/>
            </div>
            {{-- Profesi Utama pas Register --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="profesi-utama">Profesi Utama</label>
                <select id="profesi-utama" class="select2 form-select">
                  <option value="">Pilih Profesi Utama</option>
                  <option value="praktisi" selected>
                    Praktisi
                  </option>
                  <option value="tenaga-pendidik">
                    Tenaga Pendidik
                  </option>
                </select>
            </div>
            {{-- Email pas Register --}}
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="bambang@unsri.ac.id"/>
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
                    value="2000"/>
                    <p class="px-2 pb-0 mb-0">s/d.</p>
                    <input class="form-control" type="number"
                    id="periode-berakhir" name="periode-berakhir" placeholder="Tahun Berakhir" value="2022"/>
                </div>
            </div>
            <div class="col-md-6"></div>
            {{-- I.1 B5 --}}
            <div class="mb-3 col-md-6">
                <label for="nama-lengkap2" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap2" name="nama-lengkap2" placeholder="Nama Lengkap" value="Bambang Pamungkas"/>
            </div>
            {{-- I.1 B6 --}}
            <div class="mb-3 col-md-6">
                <label for="ttl" class="form-label">Tempat & Tanggal Lahir</label>
                <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat & Tanggal Lahir" value="Palembang, 13 Februari 2022"/>
            </div>
            {{-- I.1 B7 --}}
            <div class="mb-3 col-md-6">
                <label for="no-kta2" class="form-label">No. KTA (6 Digit Terakhir)</label>
                <input type="text" class="form-control" id="no-kta2" name="no-kta2" placeholder="No. KTA (6 Digit Terakhir)" value="924160"/>
            </div>
            {{-- I.1 B8 --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="badan-kejurusan">Badan Kejurusan</label>
                <input type="text" class="form-control" id="badan-kejurusan" name="badan-kejurusan" placeholder="Badan Kejurusan" value="Teknik Informatika"/>
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
                <input type="text" class="form-control" id="alamat-rumah" name="alamat-rumah" placeholder="Alamat Rumah" value="Jl. PHDM 1 Blok B No.96A"/>
            </div>
            {{-- I.1 C17 --}}
            <div class="mb-3 col-md-6">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="Palembang"/>
            </div>
            {{-- I.1 E17 --}}
            <div class="mb-3 col-md-6">
                <label for="kode-pos" class="form-label">Kode Pos</label>
                <input class="form-control" type="text" id="kode-pos" name="kode-pos" placeholder="Kode Pos" value="30119"/>
            </div>
            {{-- I.1 C18 --}}
            <div class="mb-3 col-md-6">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="087894614101"/>
            </div>
            {{-- I.1 C19 --}}
            <div class="mb-3 col-md-6">
                <label for="telex" class="form-label">Telex</label>
                <input type="text" class="form-control" id="telex" name="telex" placeholder="Telex" value=""/>
            </div>
            {{-- I.1 C20 --}}
            <div class="mb-3 col-md-6">
                <label for="no-hp" class="form-label">No. HP</label>
                <input type="text" class="form-control" id="no-hp" name="no-hp" placeholder="No. HP" value="087894614101"/>
            </div>
            {{-- I.1 E19 --}}
            <div class="mb-3 col-md-6">
                <label for="email2" class="form-label">Email</label>
                <input type="email" class="form-control" id="email2" name="email2" placeholder="Email" value="bambang@unsri.ac.id"/>
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
                <input type="text" class="form-control" id="nama-lembaga" name="nama-lembaga" placeholder="Nama Lembaga" value="Universitas Sriwijaya"/>
            </div>
            {{-- I.1 F16 --}}
            <div class="mb-3 col-md-6">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="Dosen"/>
            </div>
            {{-- I.1 G17 --}}
            <div class="mb-3 col-md-6">
                <label for="kota2" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota2" name="kota2" placeholder="Kota" value="Palembang"/>
            </div>
            {{-- I.1 I17 --}}
            <div class="mb-3 col-md-6">
                <label for="kode-pos2" class="form-label">Kode Pos</label>
                <input class="form-control" type="text" id="kode-pos2" name="kode-pos2" placeholder="Kode Pos" value="30119"/>
            </div>
            {{-- I.1 G18 --}}
            <div class="mb-3 col-md-6">
                <label for="telepon2" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon2" name="telepon2" placeholder="Telepon" value="087894614101"/>
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
                <input type="email" class="form-control" id="email3" name="email3" placeholder="Email" value="bambang@unsri.ac.id"/>
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
          <a
            href="#"
            class="btn btn-primary text-white"
            >Simpan</a
          >
        </div>
      </div>
    </form>
    <!-- /Account -->
</div>
@endsection

