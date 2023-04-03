@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Karya Temuan') }}
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
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Data Pribadi">Data Pribadi</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item">
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
        <li class="menu-item active open">
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
                <li class="menu-item active">
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
    <form
      id="formAccountSettings"
      method="POST"
      onsubmit="return false"
    >
      <h5 class="card-header">Data Pencapaian</h5>
      <div class="card-body pb-3">
        <div class="row">
            {{-- V.4 KOLOM B --}}
            <div class="mb-3 col-md-6">
                <label for="bulan-tahun" class="form-label"
                  >Bulan - Tahun</label
                >
                <input
                  type="text"
                  class="form-control bg-white"
                  id="bulan-tahun"
                  name="bulan-tahun"
                  placeholder="Bulan - Tahun"
                  value=""
                  disabled
                />
              </div>
          {{-- V.4 KOLOM C --}}
              <div class="mb-3">
            <label for="judul" class="form-label"
              >Judul/ Nama Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Terbaru</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="judul"
              name="judul"
              placeholder="Judul/ Nama Krya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru"
              value="Karya Temuan Pertama"
              disabled
            />
          </div>
          {{-- V.4 KOLOM D --}}
          <div class="mb-3">
            <label for="uraian" class="form-label"
              >Uraian Singkat Karya Temuan/ Inovasi/
              Paten</label
            >
            <textarea
              name="uraian"
              id="uraian"
              class="form-control bg-white"
              placeholder="Uraian Singkat Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru" rows="5"
              disabled
            ></textarea>
          </div>
          {{-- V.4 KOLOM E --}}
          <div class="mb-3 col-md-6">
            <label for="nama-media" class="form-label"
              >Media Publikasi Karya (Kalau Ada)</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="nama-media"
              name="nama-media"
              placeholder="Media Publikasi Karya (Kalau Ada)"
              value="Kompas"
              disabled
            />
          </div>
          {{-- V.4 KOLOM F --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkatan-media"
              >Media Publikasi Tingkat</label
            >
            <select
              id="tingkatan-media"
              class="select2 form-select bg-white"
              disabled
            >
              <option value="">
                Pilih Media Publikasi Tingkat
              </option>
              <option value="lokal" selected>
                Dipublikasikan di Media Lokal
              </option>
              <option value="nasional">
                Dipublikasikan di Media Nasional
              </option>
              <option value="regional-internasional">
                Dipublikasikan di Media Regional/ Internasional
              </option>
            </select>
          </div>
          {{-- V.4 KOLOM G --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkat-kesulitan"
              >Tingkat Kesulitan dan Manfaatnya Karya Temuan/
              Inovasi/ Paten dan Implementasi Tingkat Terbaru</label
            >
            <select
              id="tingkat-kesulitan"
              class="select2 form-select bg-white"
              disabled
            >
              <option value="">
                Pilih Tingkat Kesulitan dan Manfaatnya Karya
                Temuan/ Inovasi/ Paten dan Implementasi
                Teknologi Baru
              </option>
              <option value="rendah" selected>Rendah</option>
              <option value="sedang">Sedang</option>
              <option value="tinggi">Tinggi</option>
              <option value="sangat-tinggi">
                Sangat Tinggi
              </option>
            </select>
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
      {{-- <hr class="my-0" />
      <div class="card-body">
        <div class="row pb-2">
          <div class="col-md mb-4 mb-md-0">
            <h5>Pilih Bakuan Kompetensi</h5>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melakukan penelitian
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p611"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p611"
                    >Mengidentifikasi kebutuhan
                    penelitian</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p612"
                    disabled
                  />
                  <label class="form-check-label" for="p612"
                    >Melakukan kajian pustaka</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p613"
                    disabled
                  />
                  <label class="form-check-label" for="p613"
                    >Melakukan penelitian dasar dan atau
                    terapan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p614"
                    disabled
                  />
                  <label class="form-check-label" for="p614"
                    >Mencari pengetahuan baru</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p615"
                    disabled
                  />
                  <label class="form-check-label" for="p615"
                    >Menemu-kenali dan menyampaikan hasil
                    penelitian</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Merumuskan konsep pengembangan hasil penelitian
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p621"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p621"
                    >Menemu-kenali kebutuhan pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p622"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p622"
                    >Memeriksa konsep-konsep yang mempunyai
                    kemungkinan untuk dilaksanakan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p623"
                    disabled
                  />
                  <label class="form-check-label" for="p623"
                    >Memilih konsep yang akan dikembangkan lebih
                    lanjut</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menemu-kenali dan mengusahakan sumber daya untuk
                pengembangan hasil penelitian
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p631"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p631"
                    >Merumuskan kebutuhan akhir pemakai</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p632"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p632"
                    >Menyiapkan usulan untuk mencari sumber daya
                    bagi pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p633"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p633"
                    >Menyiapkan perkiraan biaya untuk
                    pengembangan, perancangan, produksi atau
                    konstruksi, dan operasi</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melakukan kaji pasar untuk produk hasil
                penelitian dan pengembangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p641"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p641"
                    >Merumuskan ciri-ciri produk yang diinginkan
                    pasar</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p642"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p642"
                    >Mengumpulkan informasi dan membuat
                    rekomendasi untuk menentukan harga
                    produk</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p643"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p643"
                    >Membuat rekomendasi mengenai distribusi
                    produk</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p644"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p644"
                    >Membuat rekomendasi untuk mempromosikan
                    produk</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengkomersialkan hasil penelitian dan
                pengembangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p651"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p651"
                    >Melakukan kaji-nilai ekonomis atas produk
                    hasil penelitian dan pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p652"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p652"
                    >Memilih mekanisme yang cocok untuk
                    memasarkan produk hasil penelitian dan
                    pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p653"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p653"
                    >Menyiapkan model peragaan untuk membuktikan
                    kelayakan teknis dan komersial</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p654"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p654"
                    >Mengembangkan rencana proyek percontohan
                    untuk membuktikan kelayakan teknis dan
                    komersial</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="publikasi-temuan.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <hr class="my-0" />
      <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="hasil-validasi"
            >Hasil Validasi Anda Terhadap Pencapaian
            Mahasiswa</label
          >
          <select
            id="hasil-validasi"
            class="select2 form-select"
          >
            <option value="" selected>
              Pilih Hasil Validasi Anda Terhadap Pencapaian
              Mahasiswa
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
            <a href="/verifikator/publikasi/karya-temuan" class="btn btn-secondary"
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
            <a
              href="/verifikator/publikasi/karya-temuan"
              class="btn btn-primary text-white"
              >Simpan</a
            >
          </div>
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>
@endsection

