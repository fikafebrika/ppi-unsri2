@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Pendidikan Formal') }}
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
        <li class="menu-item">
          <a href="/profil" class="menu-link">
            <div data-i18n="Profil">Profil</div>
          </a>
        </li>
        <li class="menu-item active open">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Data Pribadi">Data Pribadi</div>
          </a>
          <ul class="menu-sub ps-2">
            <li class="menu-item active">
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
      <h5 class="card-header">Data Pencapaian</h5>
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
                  >Upload Bukti</label
                >
                <input
                  class="form-control"
                  type="file"
                  id="bukti"
                />
              </div>
          {{-- I.2 C2 (Untuk S1) --}}
          {{-- I.2 D2 (Untuk S2) --}}
          {{-- I.2 E2 (Untuk S3) --}}
            <div class="mb-3 col-md-6">
            <label class="form-label" for="jenjang"
              >Jenjang</label
            >
            <select id="jenjang" class="select2 form-select">
                <option value="">Pilih Jenjang</option>
                <option value="s1" selected>S1</option>
                <option value="s2">S2</option>
                <option value="s3">S3</option>
            </select>
          </div>
          {{-- I.2 C3 (Untuk S1) --}}
          {{-- I.2 D3 (Untuk S2) --}}
          {{-- I.2 E3 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label
              for="nama-perguruan-tinggi"
              class="form-label"
              >Nama Perguruan Tinggi</label
            >
            <input
              type="text"
              class="form-control"
              id="nama-perguruan-tinggi"
              name="nama-perguruan-tinggi"
              placeholder="Nama Perguruan Tinggi"
              value="Universitas Sriwijaya"

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
              class="form-control"
              type="text"
              id="fakultas"
              name="fakultas"
              placeholder="Fakultas"
              value="Ilmu Komputer"

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
              class="form-control"
              id="jurusan"
              name="jurusan"
              placeholder="Jurusan"
              value="Sistem Informasi"

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
              class="form-control"
              id="kota"
              name="kota"
              placeholder="Kota"
              value="Palembang"

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
              class="form-control"
              id="negara"
              name="negara"
              placeholder="Negara"
              value="Indonesia"

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
              class="form-control"
              id="tahun"
              name="tahun"
              placeholder="Tahun Lulus"
              value="2022"

            />
          </div>
          {{-- I.2 C9 (Untuk S1) --}}
          {{-- I.2 D9 (Untuk S2) --}}
          {{-- I.2 E9 (Untuk S3) --}}
          <div class="mb-3 col-md-6">
            <label for="gelar" class="form-label">Gelar</label>
            <input
              type="text"
              class="form-control"
              id="gelar"
              name="gelar"
              placeholder="Gelar"
              value="S.Kom."

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
              class="form-control"
              placeholder="Judul Tugas Akhir/ Skripsi/ Tesis/ Disertasi"

            >Perancangan UI/UX Sistem Kapustakan Kraton</textarea
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
              class="form-control"
              placeholder="Uraian Singkat Tentang Materi Tugas Akhir/ Skripsi/ Tesis/ Disertasi"

            >Melakukan perancangan desain Sistem Kapustakan Kraton dalam bentuk Prototype</textarea
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
              class="form-control"
              id="nilai"
              name="nilai"
              placeholder="Nilai Akademik Rata-rata"
              value="3.95"

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
              type="date"
              class="form-control"
              id="judicium"
              name="judicium"
              placeholder="Judicium"
              value=""

            />
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
            href="/data-pribadi/pendidikan-formal"
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
          <a
            href="/data-pribadi/pendidikan-formal"
            class="btn btn-primary text-white"
            >Simpan</a
          >
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>

@endsection

