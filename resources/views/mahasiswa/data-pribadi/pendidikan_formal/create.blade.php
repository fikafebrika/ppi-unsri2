@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Pendidikan Formal') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
  <h5 class="card-header pb-0">Data Pencapaian</h5>
    <form
      id="formAccountSettings"
      method="POST"
      action="/data-pribadi/pendidikan_formal"
      enctype="multipart/form-data"
    >
    @csrf
      {{-- Hasil Validasi Ditampilkan, ketika data pencapaian, statusnya dah valid atau invalid --}}
      {{-- <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="hasil-validasi"
            >Hasil Validasi</label
          >
          <select
            id="hasil-validasi"
            class="select2 form-select bg-white" disabled
          >
            <option value="">
              Pilih Hasil Validasi Anda Terhadap Pencapaian
              Mahasiswa
            </option>
            <option value="invalid" class="text-danger fw-bold">
              INVALID (*Bila ada kesalahan pada pencapaian
              mahasiswa atau ada pencapaian yang tidak sesuai)
            </option>
            <option value="valid" class="text-success fw-bold" selected>
              VALID (*Bila semua pencapaian mahasiswa telah
              sesuai)
            </option>
          </select>
        </div>
        <div class="mb-3 col-md-12">
          <label
            for="catatan-verifikator"
            class="form-label text-danger"
            >Catatan Tim Verifikator</label
          >
          <textarea
            id="catatan-verifikator"
            class="form-control bg-white" disabled
            placeholder="Berikan Catatan Kepada Mahasiswa Terkait Kesesuaian Maupun Kesalahan Dalam Mengklaim Pencapaian Mahasiswa"
            rows="5"
          >Tidak Ada</textarea>
        </div>
      </div>
      <hr class="my-0" /> --}}
      <div class="card-body pb-3">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="bukti" class="form-label"
                  >Upload Bukti</label>
                <div id="pdf-preview"></div>
                <input
                  class="form-control @error('bukti') is-invalid @enderror"
                  type="file"
                  id="bukti"
                  name="bukti"
                  onchange="previewPDF(this)"
                />
                @error('bukti')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
              </div>
          {{-- I.2 C2 (Untuk S1) --}}
          {{-- I.2 D2 (Untuk S2) --}}
          {{-- I.2 E2 (Untuk S3) --}}
            <div class="mb-3 col-md-6">
            <label class="form-label" for="jenjang"
              >Jenjang</label>
            <select id="jenjang" class="select2 form-select" name="jenjang">
                <option value="">Pilih Jenjang</option>
                <option value="S1" {{ old('jenjang') == "S1" ? ' selected' : '' }}>S1</option>
                <option value="S2" {{ old('jenjang') == "S2" ? ' selected' : '' }}>S2</option>
                <option value="S3" {{ old('jenjang') == "S3" ? ' selected' : '' }}>S3</option>
            </select>
          </div>
          {{-- I.2 C3 (Untuk S1) --}}
          {{-- I.2 D3 (Untuk S2) --}}
          {{-- I.2 E3 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label
              for="nama-perguruan-tinggi"
              class="form-label"
              >Nama Perguruan Tinggi</label>
            <input
              type="text"
              class="form-control @error('nama_perguruan_tinggi') is-invalid @enderror"
              id="nama_perguruan_tinggi"
              name="nama_perguruan_tinggi"
              placeholder="Nama Perguruan Tinggi"
              value="{{ old('nama_perguruan_tinggi') }}"
            />
            @error('nama_perguruan_tinggi')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C4 (Untuk S1) --}}
          {{-- I.2 D4 (Untuk S2) --}}
          {{-- I.2 E4 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input
              class="form-control @error('fakultas') is-invalid @enderror"
              type="text"
              id="fakultas"
              name="fakultas"
              placeholder="Fakultas"
              value="{{ old('fakultas') }}"
            />
            @error('fakultas')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C5 (Untuk S1) --}}
          {{-- I.2 D5 (Untuk S2) --}}
          {{-- I.2 E5 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="jurusan" class="form-label"
              >Jurusan</label>
            <input
              type="text"
              class="form-control @error('jurusan') is-invalid @enderror"
              id="jurusan"
              name="jurusan"
              placeholder="Jurusan"
              value="{{ old('jurusan') }}"
            />
            @error('jurusan')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C6 (Untuk S1) --}}
          {{-- I.2 D6 (Untuk S2) --}}
          {{-- I.2 E6 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="kota" class="form-label"
              >Kota</label>
            <input
              type="text"
              class="form-control @error('kota') is-invalid @enderror"
              id="kota"
              name="kota"
              placeholder="Kota"
              value="{{ old('kota') }}"
            />
            @error('kota')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
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
              class="form-control @error('negara') is-invalid @enderror"
              id="negara"
              name="negara"
              placeholder="Negara"
              value="{{ old('negara') }}"
            />
            @error('negara')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C8 (Untuk S1) --}}
          {{-- I.2 D8 (Untuk S2) --}}
          {{-- I.2 E8 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="tahun_lulus" class="form-label"
              >Tahun Lulus</label
            >
            <input
              type="text"
              class="form-control @error('tahun_lulus') is-invalid @enderror"
              id="tahun_lulus"
              name="tahun_lulus"
              value="{{ old('tahun_lulus') }}"
              placeholder="Tahun Lulus"
            />
            @error('tahun_lulus')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C9 (Untuk S1) --}}
          {{-- I.2 D9 (Untuk S2) --}}
          {{-- I.2 E9 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="gelar" class="form-label">Gelar</label>
            <input
              type="text"
              class="form-control @error('gelar') is-invalid @enderror"
              id="gelar"
              name="gelar"
              value="{{ old('gelar') }}"
              placeholder="Gelar"
            />
            @error('gelar')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C10 (Untuk S1) --}}
          {{-- I.2 D10 (Untuk S2) --}}
          {{-- I.2 E10 (Untuk S3) --}}
          <div class="mb-3">
            <label for="judul" class="form-label"
              >Judul Tugas Akhir/ Skripsi/ Tesis/
              Disertasi</label>
            <textarea
              name="judul"
              id="judul"
              value="{{ old('judul') }}"
              class="form-control @error('judul') is-invalid @enderror"
              placeholder="Judul Tugas Akhir/ Skripsi/ Tesis/ Disertasi"
            ></textarea>
            @error('judul')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C11 (Untuk S1) --}}
          {{-- I.2 D11 (Untuk S2) --}}
          {{-- I.2 E11 (Untuk S3) --}}
          <div class="mb-3">
            <label for="uraian_singkat" class="form-label"
              >Uraian Singkat Tentang Materi Tugas Akhir/
              Skripsi/ Tesis/ Disertasi</label>
            <textarea rows="5"
              name="uraian_singkat"
              id="uraian_singkat"
              value="{{ old('uraian_singkat') }}"
              class="form-control @error('uraian_singkat') is-invalid @enderror"
              placeholder="Uraian Singkat Tentang Materi Tugas Akhir/ Skripsi/ Tesis/ Disertasi"
            ></textarea>
            @error('uraian_singkat')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C12 (Untuk S1) --}}
          {{-- I.2 D12 (Untuk S2) --}}
          {{-- I.2 E12 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="nilai_akademik" class="form-label"
              >Nilai Akademik Rata-rata</label>
            <input
              type="number"
              step="any"
              class="form-control @error('nilai_akademik') is-invalid @enderror"
              id="nilai_akademik"
              name="nilai_akademik"
              value="{{ old('nilai_akademik') }}"
              placeholder="Nilai Akademik Rata-rata"
            />
            @error('nilai')
            <div class="invalid-feedback"> {{ $message }}</div>
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            @enderror
          </div>
          {{-- I.2 C13 (Untuk S1) --}}
          {{-- I.2 D13 (Untuk S2) --}}
          {{-- I.2 E13 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="judicium" class="form-label"
              >Judicium</label>
            <input
              type="date"
              class="form-control  @error('judicium') is-invalid @enderror"
              id="judicium"
              name="judicium"
              value="{{ old('judicium') }}"
              placeholder="Judicium"
            />
            @error('judicium')
            {{-- <div class="invalid-feedback"> {{ $message }}</div> --}}
            <p class="text-danger">{{ $message }}</p>
            @enderror
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
            href="data-pribadi-formal.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <div class="d-flex justify-content-between m-4 mt-0">
        <div>
          <a
            href="/data-pribadi/pendidikan_formal"
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
          <button class="btn btn-primary text-white" type="submit">
            Simpan
          </button>
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>

  <script>
    function previewPDF(input) {
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            const pdfPreview = document.getElementById('pdf-preview');
            pdfPreview.innerHTML = `<iframe src="${reader.result}" width="100%" height="500px"></iframe>`;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            const pdfPreview = document.getElementById('pdf-preview');
            pdfPreview.innerHTML = '';
        }
    }
  </script>

@endsection

