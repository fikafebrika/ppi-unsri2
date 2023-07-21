@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Seminar') }}
@endsection

@section('sidebar')
@include('verifikator.partials.sidebar-detail', ["userId" => $userId ])
@endsection

@section('content')
<div class="card">
  <h5 class="card-header">Data Pencapaian</h5>
    <form
      id="formAccountSettings"
      method="POST"
      action="/verifikator/publikasi/seminar/{{ $seminar_user->id }}/edit"
    >
    @method('put')
    @csrf
      <div class="card-body pb-3">
        <div class="row">
            {{-- V.3 KOLOM B --}}
            <div class="mb-3 col-md-6">
                <label for="bulan_tahun" class="form-label"
                  >Bulan - Tahun</label
                >
                <input
                  type="text"
                  class="form-control bg-white"
                  id="bulan_tahun"
                  name="bulan_tahun"
                  placeholder="Bulan - Tahun"
                  value="{{ old('bulan_tahun', $seminar_user->bulan_tahun) }}"
                  disabled
                />
              </div>
          {{-- V.3 KOLOM C --}}
              <div class="mb-3">
            <label for="nama_seminar" class="form-label"
              >Nama Seminar/ Lokakarya</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="nama_seminar"
              name="nama_seminar"
              placeholder="Nama Seminar/ Lokakarya"
              value="{{ old('nama_seminar', $seminar_user->nama_seminar) }}"
              disabled
            />
          </div>
          {{-- V.3 KOLOM D --}}
          <div class="mb-3 col-md-6">
            <label for="nama_penyelenggara" class="form-label"
              >Nama Penyelenggara</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="nama_penyelenggara"
              name="nama_penyelenggara"
              placeholder="Nama Penyelenggara"
              value="{{ old('nama_penyelenggara', $seminar_user->nama_penyelenggara) }}"
              disabled
            />
          </div>
          {{-- V.3 KOLOM E --}}
          <div class="mb-3 col-md-6">
            <label for="lokasi" class="form-label"
              >Lokasi</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="lokasi"
              name="lokasi"
              placeholder="Lokasi"
              value="{{ old('lokasi', $seminar_user->lokasi) }}"
              disabled
            />
          </div>
          {{-- V.3 KOLOM F --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkatan_seminar"
              >Seminar/ Lokakarya Tingkat</label
            >
            <select
              id="tingkatan_seminar"
              name="tingkatan_seminar"
              class="select2 form-select bg-white"
              disabled
            >
            <option value="nasional" {{ old('tingkatan_seminar', $seminar_user->tingkatan_seminar) == "nasional" ? ' selected' : '' }}>
              Pada Seminar Nasional
            </option>
            <option value="internasional" {{ old('tingkatan_seminar', $seminar_user->tingkatan_seminar) == "internasional" ? ' selected' : '' }}>
              Pada Seminar Internasional
            </option>
            </select>
          </div>
          {{-- V.3 KOLOM G --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkat_kesulitan"
              >Tingkat Kesulitan dan Manfaatnya Materi Seminar/
              Lokakarya</label
            >
            <select
              id="tingkat_kesulitan"
              name="tingkat_kesulitan"
              class="select2 form-select bg-white"
              disabled
            >
            <option value="rendah" {{ old('tingkat_kesulitan', $seminar_user->tingkat_kesulitan) == "rendah" ? ' selected' : '' }}>
              Rendah
            </option>
            <option value="sedang" {{ old('tingkat_kesulitan', $seminar_user->tingkat_kesulitan) == "sedang" ? ' selected' : '' }}>
              Sedang
            </option>
            <option value="tinggi" {{ old('tingkat_kesulitan', $seminar_user->tingkat_kesulitan) == "tinggi" ? ' selected' : '' }}>
              Tinggi
            </option>
            <option value="sangat-tinggi" {{ old('tingkat_kesulitan', $seminar_user->tingkat_kesulitan) == "sangat-tinggi" ? ' selected' : '' }}>
              Sangat Tinggi
            </option>
            </select>
          </div>
          {{-- V.3 KOLOM H --}}
          <div class="mb-3">
            <label for="uraian" class="form-label"
              >Uraian Singkat Materi Seminar/ Lokakarya</label
            >
            <textarea
              name="uraian"
              id="uraian"
              class="form-control bg-white"
              placeholder="Uraian Singkat Materi Seminar/ Lokakarya"
              disabled rows="5"
            >{{ old('uraian', $seminar_user->uraian) }}</textarea>
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
                Melaksanakan pekerjaan yang bersifat
                kecendekiaan dan beragam
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w211"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w211"
                    >Menggunakan gagasannya sendiri dalam
                    mensintesakan pemecahan yang memuaskan atas
                    masalah keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w212"
                    disabled
                  />
                  <label class="form-check-label" for="w212"
                    >Menggunakan kearifan yang profesional dalam
                    membuat keputusan keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w213"
                    disabled
                  />
                  <label class="form-check-label" for="w213"
                    >Melakukan pekerjaan keinsinyuran secara
                    kreatif dan inovatif</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w214"
                    disabled
                  />
                  <label class="form-check-label" for="w214"
                    >Mengenali dan menanggulangi masalah
                    keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w215"
                    disabled
                  />
                  <label class="form-check-label" for="w215"
                    >Memperluas pengetahuan dalam kejuruan atau
                    bidang keahlian yang terkait dan memupuk
                    kerjasama antar kejuruan pada waktu bekerja
                    dalam lingkungan aneka-kejuruan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w216"
                    disabled
                  />
                  <label class="form-check-label" for="w216"
                    >Menyelidiki kebutuhan dan memanfaatkan
                    peluang yang khas terdapat dalam sesuatu
                    bidang pekerjaan atau bidang kejuruan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menguasai, memelihara, mengembangkan dan
                memutakhir-kan keahlian dalam bidang pekerjaan
                dan kejuruannya
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w221"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w221"
                    >Menyadari keterbatasan kepakaran dan
                    pengetahuan dirinya dan menggunakan seluruh
                    kemampuan untuk mengenali kekurangan diri,
                    menambah pengetahuan dan mengupayakan
                    bantuan dari pakar yang tepat</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w222"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w222"
                    >Menggunakan kemampuan untuk mencari
                    informasi sehingga dapat mengikuti
                    perkembangan teknologi atau kemajuan
                    lainnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w223"
                    disabled
                  />
                  <label class="form-check-label" for="w223"
                    >Memperluas dasar pengetahuan dengan membaca
                    majalah profesional, mengikuti seminar
                    profesional dan menjalin kerjasama antar
                    profesional</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w224"
                    disabled
                  />
                  <label class="form-check-label" for="w224"
                    >Memperdalam dasar pengetahuan secara
                    sistematik dengan melakukan penelitian dan
                    percobaan untuk menyelesaikan masalah
                    keinsinyuran yang khas</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w225"
                    disabled
                  />
                  <label class="form-check-label" for="w225"
                    >Memanfaatkan setiap pengalaman pekerjaan
                    untuk mengembangkan
                    keprofesionalannya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w226"
                    disabled
                  />
                  <label class="form-check-label" for="w226"
                    >Melakukan pencatatan mengenai kegiatan
                    pengembangan keprofesionalannya.</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan metoda-metoda
                perekayasaan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w231"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w231"
                    >Menemu-kenali (mengidentifikasi) berbagai
                    penerapan kerekayasaan tepat-guna</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w232"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w232"
                    >Mengajukan konsep untuk melaksanakan
                    penerapan kerekayasaan tepat-guna yang telah
                    terpilih</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w233"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w233"
                    >Merinci penerapan kerekayasaan tepat-guna
                    yang dipilih</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w234"
                    disabled
                  />
                  <label class="form-check-label" for="w234"
                    >Mengendalikan kemutakhiran dokumentasi
                    hasil-hasil penerapannya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w235"
                    disabled
                  />
                  <label class="form-check-label" for="w235"
                    >Mengkaji persyaratan bagi diperolehnya
                    persetujuan pemberi tugas dan bagi pemenuhan
                    kebutuhan di masa depan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan kaidah-kaidah penjaminan
                mutu
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w241"
                    disabled
                  />
                  <label class="form-check-label" for="w241"
                    >Menerapkan sistem mutu</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w242"
                    disabled
                  />
                  <label class="form-check-label" for="w242"
                    >Mendorong diterimanya kaidah-kaidah
                    penjaminan mutu oleh rekan sekerja dan
                    anak-buah</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w243"
                    disabled
                  />
                  <label class="form-check-label" for="w243"
                    >Melaksanakan setiap pekerjaan sesuai dengan
                    bakuan mutu yang tepat</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w244"
                    disabled
                  />
                  <label class="form-check-label" for="w244"
                    >Menerapkan tatacara kendali mutu dan
                    penjaminan mutu</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memilih dan menerapkan penggunaan perangkat
                perekayasaan dan teknologi yang tepat-guna
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w251"
                    disabled
                  />
                  <label class="form-check-label" for="w251"
                    >Memilih dan menggunakan analisis matematik,
                    ilmu keinsinyuran, simulasi komputer atau
                    teknik pemodelan lainnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w252"
                    disabled
                  />
                  <label class="form-check-label" for="w252"
                    >Memilih dan memanfaatkan penerapan sistem
                    komputer</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w253"
                    disabled
                  />
                  <label class="form-check-label" for="w253"
                    >Mengarahkan dan melaksanakan tugas-tugas
                    pemrograman dan penggunaan perangkat
                    lunak</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w254"
                    disabled
                  />
                  <label class="form-check-label" for="w254"
                    >Memilih dan menggunakan alat bantu
                    teknologi dan memantau kinerjanya</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan uji-coba, pengukuran dan kaji-nilai
                (evaluasi)
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w261"
                    disabled
                  />
                  <label class="form-check-label" for="w261"
                    >Merumuskan tujuan uji-coba</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w262"
                    disabled
                  />
                  <label class="form-check-label" for="w262"
                    >Menyusun tatacara dan jadwal
                    uji-coba</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w263"
                    disabled
                  />
                  <label class="form-check-label" for="w263"
                    >Mengembangkan tatacara dan alat-alat
                    pengukuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w264"
                    disabled
                  />
                  <label class="form-check-label" for="w264"
                    >Melaksanakan uji-coba dan pengukuran untuk
                    kerja keinsinyuran yang kritis</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w265"
                    disabled
                  />
                  <label class="form-check-label" for="w265"
                    >Mengawasi uji-coba dan pengukuran untuk
                    kerja yang tidak kritis</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w266"
                    disabled
                  />
                  <label class="form-check-label" for="w266"
                    >Mengkaji-nilai hasil uji-coba dan
                    pengukuran</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="publikasi-seminar.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <hr class="my-0" />
      <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="status_validasi"
            >Hasil Validasi Anda Terhadap Pencapaian
            Mahasiswa</label
          >
          <select
            id="status_validasi"
            name="status_validasi"
            class="select2 form-select"
          >
          <option value="" {{ old('status_validasi', $seminar_user->status_validasi) == "" ? ' selected' : '' }} class="text-warning fw-bold">
            PENDING (*Pilih Hasil Validasi Anda Terhadap Pencapaian
            Mahasiswa)
            </option>
            <option value="invalid" {{ old('status_validasi', $seminar_user->status_validasi) == "invalid" ? ' selected' : '' }} class="text-danger fw-bold">
              INVALID (*Bila ada kesalahan pada pencapaian
              mahasiswa atau ada pencapaian yang tidak sesuai)
            </option>
            <option value="valid" {{ old('status_validasi', $seminar_user->status_validasi) == "valid" ? ' selected' : '' }} class="text-success fw-bold">
              VALID (*Bila semua pencapaian mahasiswa telah
              sesuai)
            </option>
          </select>
        </div>
        <div class="mb-3 col-md-12">
          <label
            for="catatan_verifikator"
            class="form-label text-danger"
            >Catatan Tim Verifikator (*Bila Ada)</label
          >
          <textarea
            id="catatan_verifikator"
            name="catatan_verifikator"
            class="form-control"
            placeholder="Berikan Catatan Kepada Mahasiswa Terkait Kesesuaian Maupun Kesalahan Dalam Mengklaim Pencapaian Mahasiswa"
            rows="5"
          >{{ old('catatan_verifikator', $seminar_user->catatan_verifikator) }}</textarea>
        </div>
        <div class="mt-4 d-flex justify-content-between">
          <div class="me-2">
            <a href="/verifikator/publikasi/seminar" class="btn btn-secondary"
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
              type="submit"
              class="btn btn-primary text-white"
              >Simpan</button
            >
          </div>
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>
@endsection

