@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Kualifikasi Profesional') }}
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
        <li class="menu-item active">
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
            {{-- III KOLOM B --}}
            <div class="mb-3 col-md-6">
                <label for="periode" class="form-label"
                  >Periode</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="periode"
                  name="periode"
                  placeholder="Periode"
                  value=""

                />
              </div>
          {{-- III KOLOM C --}}
              <div class="mb-3 col-md-6">
            <label for="nama-instansi" class="form-label"
              >Nama Instansi/ Perusahaan</label
            >
            <input
              class="form-control"
              type="text"
              id="nama-instansi"
              name="nama-instansi"
              placeholder="Nama Instansi/ Perusahaan"
              value="Universitas Sriwijaya"

            />
          </div>
          {{-- III KOLOM D --}}
          <div class="mb-3 col-md-6">
            <label for="jabatan" class="form-label"
              >Jabatan/ Tugas</label
            >
            <input
              type="text"
              class="form-control"
              id="jabatan"
              name="jabatan"
              placeholder="Jabatan/ Tugas"
              value="Dosen"

            />
          </div>
          {{-- III KOLOM E --}}
          <div class="mb-3">
            <label for="nama-aktifitas" class="form-label"
              >Nama Aktifitas/ Kegiatan/ Proyek</label
            >
            <input
              type="text"
              class="form-control"
              id="nama-aktifitas"
              name="nama-aktifitas"
              placeholder="Nama Aktifitas/ Kegiatan/ Proyek"
              value="Kegiatan Jurusan"

            />
          </div>
          {{-- III KOLOM F --}}
          <div class="mb-3 col-md-6">
            <label for="pemberi-tugas" class="form-label"
              >Pemberi Tugas</label
            >
            <input
              type="text"
              class="form-control"
              id="pemberi-tugas"
              name="pemberi-tugas"
              placeholder="Pemberi Tugas"
              value="Ketua Jurusan"

            />
          </div>
          {{-- III KOLOM G --}}
          <div class="mb-3">
            <label for="lokasi" class="form-label"
              >Lokasi</label
            >
            <input
              type="text"
              class="form-control"
              id="lokasi"
              name="lokasi"
              placeholder="Lokasi"
              value="Palembang"

            />
          </div>
          {{-- III KOLOM H --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="durasi"
              >Durasi</label
            >
            <select
              id="durasi"
              class="select2 form-select"

            >
              <option value="">Pilih Durasi</option>
              <option value="1-3" selected>1 - 3 Tahun</option>
              <option value="4-7">4 - 7 Tahun</option>
              <option value="8-10">8 - 10 Tahun</option>
              <option value="lebih-dari-10">> 10 Tahun</option>
            </select>
          </div>

          {{-- III KOLOM I --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="posisi"
              >Posisi Tugas, Jabatan</label
            >
            <select
              id="posisi"
              class="select2 form-select"

            >
              <option value="">
                Pilih Posisi Tugas, Jabatan
              </option>
              <option value="anggota" selected>
                Anggota/ Staff/ Dosen
              </option>
              <option value="supervisor">
                Supervisor/ Site Engineer/ Site Manager/
                KaLab/Sekretaris Jurusan/ Ketua Jurusan/ PD
              </option>
              <option value="direktur">
                Direktur/ Ketua Tim/ Dekan/ PR/ Rektor
              </option>
              <option value="pengarah">
                Pengarah/ Adviser/ Narasumber Ahli
              </option>
            </select>
          </div>
          {{-- III KOLOM J --}}
          <div class="mb-3 col-md-6">
            <label for="nilai-proyek" class="form-label"
              >Nilai Proyek</label
            >
            <input
              type="number"
              class="form-control"
              id="nilai-proyek"
              name="nilai-proyek"
              placeholder="Nilai Proyek"
              value="10000000"

            />
          </div>
          {{-- III KOLOM K --}}
          <div class="mb-3 col-md-6">
            <label for="nilai-tanggung-jawab" class="form-label"
              >Nilai Tanggung Jawab</label
            >
            <input
              type="text"
              class="form-control"
              id="nilai-tanggung-jawab"
              name="nilai-tanggung-jawab"
              placeholder="Nilai Tanggung Jawab"
              value=""

            />
          </div>
          {{-- III KOLOM L --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="sdm"
              >SDM yang Terlibat</label
            >
            <select
              id="sdm"
              class="select2 form-select"

            >
              <option value="">Pilih SDM yang Terlibat</option>
              <option value="sedikit" selected>Sedikit</option>
              <option value="sedang">Sedang</option>
              <option value="banyak">Banyak</option>
              <option value="sangat-banyak">
                >Sangat Banyak
              </option>
            </select>
          </div>
          {{-- III KOLOM M --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkat"
              >Tingkat Kesulitan</label
            >
            <select
              id="tingkat"
              class="select2 form-select"

            >
              <option value="">Pilih Tingkat Kesulitan</option>
              <option value="rendah" selected>Rendah</option>
              <option value="sedang">Sedang</option>
              <option value="tinggi">Tinggi</option>
              <option value="sangat-tinggi">
                >Sangat tinggi
              </option>
            </select>
          </div>
          {{-- III KOLOM N --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="skala"
              >Skala Proyek</label
            >
            <select
              id="skala"
              class="select2 form-select"

            >
              <option value="">Pilih Skala Proyek</option>
              <option value="rendah" selected>Rendah</option>
              <option value="sedang">Sedang</option>
              <option value="tinggi">Tinggi</option>
              <option value="sangat-tinggi">
                >Sangat tinggi
              </option>
            </select>
          </div>
          {{-- III KOLOM O --}}
          <div class="mb-3">
            <label for="uraian" class="form-label"
              >Uraian Singkat Tugas dan Tanggung Jawab
              Profesional Sesuai NSPK</label
            >
            <textarea
              name="uraian"
              id="uraian"
              class="form-control"
              placeholder="Uraian Singkat Tugas dan Tanggung Jawab Profesional Sesuai NSPK" rows="5"

            ></textarea>
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
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
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w266"
                    >Mengkaji-nilai hasil uji-coba dan
                    pengukuran</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menjelaskan dan merumuskan kebutuhan perencanaan
                dan/atau perancangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w311"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w311"
                    >Merundingkan spesifikasi awal atau pedoman
                    rancangan (design brief) ditinjau dari
                    keinginan pemberi tugas maupun keterbatasan
                    kerekayasaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w312"
                    disabled
                  />
                  <label class="form-check-label" for="w312"
                    >Melakukan analisis atas kebutuhan rancangan
                    fungsional</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w313"
                    disabled
                  />
                  <label class="form-check-label" for="w313"
                    >Memenuhi parameter perancangan seperti
                    kinerja, keandalan, kemudahan pemeliharaan
                    dan ergonomik</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w314"
                    disabled
                  />
                  <label class="form-check-label" for="w314"
                    >Menentukan dampak atas rancangan yang di
                    akibatkan oleh faktor-faktor produksi,
                    konstruksi, pemasangan, uji-pakai, implikasi
                    siklus hidup, dukungan logistik dan
                    ketrampilan pemakai</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w315"
                    disabled
                  />
                  <label class="form-check-label" for="w315"
                    >Menentukan kendala yang mungkin ada,
                    seperti tanggungjawab perdata atas produk,
                    pengaruh lingkup fisik atas bagian yang
                    dirancang, atau pengaruh bagian tersebut
                    terhadap lingkungan, dan kemudian mengambil
                    langkah tindak-lanjut yang tepat</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w316"
                    disabled
                  />
                  <label class="form-check-label" for="w316"
                    >Menggunakan bakuan dan spesifikasi
                    perancangan keinsinyuran dan menyusun
                    spesifikasi ke-fungsi-an untuk
                    rancangannya</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Membuat usulan untuk memenuhi kebutuhan
                perencanaan dan /atau perancangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w321"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w321"
                    >Menggunakan kreatifitas dan inisiatifnya
                    dalam menyelidiki, menganalisis dan menyusun
                    konsep-konsep bagi memenuhi tujuan
                    rancangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w322"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w322"
                    >Menganalisis konsep-konsep yang
                    berkemungkinan menjadi rancangan akhir untuk
                    mengkaji dampak faktor-faktor seperti
                    kinerja, keandalan dan kemudahan
                    pemeliharaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w323"
                    disabled
                  />
                  <label class="form-check-label" for="w323"
                    >Menemu-kenali masalah yang mungkin timbul
                    dan merundingkan kemungkinan perubahan atau
                    penyesuaian atas pedoman rancangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w324"
                    disabled
                  />
                  <label class="form-check-label" for="w324"
                    >Melakukan analisis biaya-manfaat dan
                    risiko, studi kelayakan dan pembiayaan
                    siklus hidup untuk menghasilkan suatu
                    rancangan yang layak dilaksanakan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w325"
                    disabled
                  />
                  <label class="form-check-label" for="w325"
                    >Menyiapkan dan merekomendasikan pelaksanaan
                    suatu usulan yang memenuhi persyaratan
                    pemberi tugas atau pelaksana
                    manufaktur</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan pekerjaan perencanaan dan/atau
                perancangan sesuai usulan yang telah dipilih
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w331"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w331"
                    >Melaksanakan atau mengatur pelaksanaan
                    pekerjaan perancangan yang cukup
                    berbobot</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w332"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w332"
                    >Melaksanakan atau mengatur pelaksanaan
                    analisis untuk memilih komponen dan bahan
                    material sesuai rancangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w333"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w333"
                    >Menyiapkan dan memeriksa spesifikasi teknis
                    sesuai rancangan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan kaji-nilai atas hasil rancangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w341"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w341"
                    >Memaparkan rancangan secara langsung atau
                    dengan model komputer</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w342"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w342"
                    >Menyiapkan jadwal pengujian rancangan untuk
                    uji kinerja dan lingkup fisik</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w343"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w343"
                    >Mengawasi pengujian rancangan, analisis
                    hasil pengujian dan mengajukan saran
                    perbaikan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w344"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w344"
                    >Mengkaji dampak rancangan pada kondisi
                    sekeliling</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w345"
                    disabled
                  />
                  <label class="form-check-label" for="w345"
                    >Memaparkan hasil pengkajian dampak
                    rancangan pada pihak-pihak terkait</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menyiapkan dokumen penunjang
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w351"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w351"
                    >Menyiapkan dokumen penunjang rancangan
                    untuk produksi atau konstruksi, pemasangan,
                    operasi, pemeliharaan dan pelatihan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w352"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w352"
                    >Menyunting dan memeriksa dokumen
                    pendukung</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menjaga keutuhan tata identifikasi rancangan
                sepanjang proses pekerjaan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w361"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w361"
                    >Menerapkan tata identifikasi rancangan
                    dengan cara-cara dokumentasi dan pencatatan
                    yang tepat</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w362"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w362"
                    >Menetapkan tatacara pengendalian
                    dokumentasi dan catatan dalam melakukan
                    perubahan rancangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w363"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w363"
                    >Memastikan bahwa seluruh tata identifikasi
                    rancangan tetap terjaga sebagai uraian yang
                    benar sepanjang proses perancangan dan
                    konstruksi atau manufaktur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w364"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w364"
                    >Mengawasi pelaksanaan penggambaran-ulang
                    rancangan, sesuai dengan kenyataan dalam
                    pelaksanaan konstruksi (as-built) atau
                    pelaksanaan produksi
                    (as-manufactured)</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menerapkan kaidah-kaidah manajemen atas diri
                sendiri
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w411"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w411"
                    >Melakukan pengembangan diri dalam kemampuan
                    di bidang manajemen, termasuk hukum, ekonomi
                    dan sosial</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w412"
                    disabled
                  />
                  <label class="form-check-label" for="w412"
                    >Menentukan sasaran bagi diri sendiri dalam
                    mencapai tujuan kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w413"
                    disabled
                  />
                  <label class="form-check-label" for="w413"
                    >Menerapkan pengelolaan waktu dan tatakerja
                    yang efektif</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w414"
                    disabled
                  />
                  <label class="form-check-label" for="w414"
                    >Melakukan pengembangan diri dalam
                    kepemimpinan dan kerjasama kelompok</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w415"
                    disabled
                  />
                  <label class="form-check-label" for="w415"
                    >Melakukan pengembangan diri dalam cara
                    berpikir yang berwawasan luas, analitis dan
                    kreatif</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan kaidah-kaidah
                pengelolaan pekerjaan keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w421"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w421"
                    >Melakukan tugas perencanaan dan pemantauan
                    proyek</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w422"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w422"
                    >Mengembangkan uraian rincian pekerjaan yang
                    terstruktur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w423"
                    disabled
                  />
                  <label class="form-check-label" for="w423"
                    >Menyiapkan jadwal pekerjaan dan jalur
                    kritisnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w424"
                    disabled
                  />
                  <label class="form-check-label" for="w424"
                    >Memantau kemajuan, menyelidiki penyimpangan
                    dari jadwal dan memulai tindakan
                    perbaikan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan kaidah-kaidah
                kepemimpinan dalam pekerjaan keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w431"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w431"
                    >Melakukan penilaian kinerja bawahan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w432"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w432"
                    >Mematuhi prinsip keadilan dan
                    kebersamaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w433"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w433"
                    >Menggalang lingkungan hubungan kerja yang
                    efektif</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w434"
                    disabled
                  />
                  <label class="form-check-label" for="w434"
                    >Mengorganisasikan kelompok-kelompok
                    kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w435"
                    disabled
                  />
                  <label class="form-check-label" for="w435"
                    >Memimpin insinyur muda, teknisi atau tenaga
                    bawahan lainnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w436"
                    disabled
                  />
                  <label class="form-check-label" for="w436"
                    >Menghargai ataupun menghukum sesuai dengan
                    kinerja (on-merit)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w437"
                    disabled
                  />
                  <label class="form-check-label" for="w437"
                    >Memantau tugas-tugas untuk menjamin bahwa
                    kegiatan dilaksanakan sesuai rencana dan
                    mengambil tindakan perbaikan yang
                    perlu</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Berkomunikasi dengan efektif
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w441"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w441"
                    >Berkomunikasi dengan baik, benar dan lancar
                    untuk menyampaikan pendapat secara lisan
                    maupun tertulis dalam bahasa
                    Indonesia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w442"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w442"
                    >Menyiapkan, menafsirkan dan memaparkan
                    informasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w443"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w443"
                    >Berhubungan dengan rekan dan pakar di dalam
                    dan di luar kalangannya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w444"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w444"
                    >Mengartikan dengan benar instruksi
                    keinsinyuran yang diterima</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w445"
                    disabled
                  />
                  <label class="form-check-label" for="w445"
                    >Memberikan instruksi yang jelas, cermat dan
                    tepat kepada bawahan dalam suatu bahasa
                    asing yang lazim dipergunakan di bidang
                    keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w446"
                    disabled
                  />
                  <label class="form-check-label" for="w446"
                    >Memilih media dan cara komunikasi yang
                    tepat guna</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengelola informasi keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w451"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w451"
                    >Menyiapkan dan menyajikan ceramah
                    (lectures) pada suatu tingkat
                    profesional</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w452"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w452"
                    >Menyiapkan tulisan untuk diterbitkan dalam
                    berkala keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w453"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w453"
                    >Menyampaikan informasi keinsinyuran secara
                    efektif kepada kalangan keinsinyuran dan
                    kalangan lainnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w454"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w454"
                    >Meneruskan informasi keinsinyuran secara
                    efektif kepada atasan (insinyur maupun
                    bukan)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w455"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w455"
                    >Melakukan perundingan, penyelesaian
                    sengketa, pembinaan, pertukar-pikiran serta
                    menyatakan pendapat dan sikap</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w456"
                    disabled
                  />
                  <label class="form-check-label" for="w456"
                    >Menyiapkan laporan keinsinyuran
                    professional, seperti laporan kemajuan
                    pekerjaan, secara baik dan benar</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w457"
                    disabled
                  />
                  <label class="form-check-label" for="w457"
                    >Menyiapkan dokumen seperti spesifikasi,
                    bakuan dan paparan grafis</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w458"
                    disabled
                  />
                  <label class="form-check-label" for="w458"
                    >Menyiapkan dokumen yang lebih kompleks
                    seperti analisis dampak lingkungan atau
                    kontrak kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w459"
                    disabled
                  />
                  <label class="form-check-label" for="w459"
                    >Menafsirkan dengan benar gambar teknik
                    serta grafik, spesifikasi, bakuan,
                    peraturan, pedoman praktek dan analisis
                    dampak lingkungan</label
                  >
                </div>
              </div>
            </div>
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
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan tugas konsultansi perekayasaan
                keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p711"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p711"
                    >Memberikan nasihat/konsultansi kepada
                    pemimpin proyek</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p712"
                    disabled
                  />
                  <label class="form-check-label" for="p712"
                    >Menyusun studi kelayakan dan rencana dasar
                    (master plan)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p713"
                    disabled
                  />
                  <label class="form-check-label" for="p713"
                    >Menyiapkan pedoman perancangan (design
                    guidelines) perekayasaan berdasarkan uraian
                    kebutuhan pemberi tugas</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p714"
                    disabled
                  />
                  <label class="form-check-label" for="p714"
                    >Menyiapkan rancangan pendahuluan,
                    pengembangannya dan rancangan terinci
                    (detailed design) perekayasaan, agar pemilik
                    proyek dapat melakukan pelelangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p715"
                    disabled
                  />
                  <label class="form-check-label" for="p715"
                    >Melakukan tugas pemantauan kemajuan proyek,
                    menyelidiki penyimpangan dari jadwal dan
                    memulai tindakan perbaikan yang perlu</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p716"
                    disabled
                  />
                  <label class="form-check-label" for="p716"
                    >Mengembangkan uraian rincian pekerjaan yang
                    terstruktur serta menyiapkan jalur kritis
                    (critical path) pada jadwal pelaksanaan
                    proyek</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menyiapkan, melaksanakan dan memantau pelelangan
                dan kontrak untuk pekerjaan konstruksi/instalasi
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p721"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p721"
                    >Menyiapkan jadwal pelelangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p722"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p722"
                    >Mengkaji-nilai jadwal pelelangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p723"
                    disabled
                  />
                  <label class="form-check-label" for="p723"
                    >Menyiapkan pelelangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p724"
                    disabled
                  />
                  <label class="form-check-label" for="p724"
                    >Mengkaji-nilai penawaran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p725"
                    disabled
                  />
                  <label class="form-check-label" for="p725"
                    >Menyiapkan kontrak</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p726"
                    disabled
                  />
                  <label class="form-check-label" for="p726"
                    >Mengusahakan pemenuhan terhadap persyaratan
                    kontrak</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p727"
                    disabled
                  />
                  <label class="form-check-label" for="p727"
                    >Memantau kemajuan pekerjaan dan menyelidiki
                    penyimpangan terhadap persyaratan
                    kontrak</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p728"
                    disabled
                  />
                  <label class="form-check-label" for="p728"
                    >Memantau kinerja kontraktor dan menyelidiki
                    penyimpangan terhadap persyaratan
                    kontrak</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p729"
                    disabled
                  />
                  <label class="form-check-label" for="p729"
                    >Menyelidiki kinerja kontraktor untuk
                    merekomendasi berita-acara pembayaran untuk
                    disetujui</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p7210"
                    disabled
                  />
                  <label class="form-check-label" for="p7210"
                    >Menyiapkan laporan kemajuan pekerjaan untuk
                    pemberi tugas</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan pekerjaan konstruksi/instalasi
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p731"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p731"
                    >Menyiapkan spesifikasi dan jadwal pekerjaan
                    konstruksi/instalasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p732"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p732"
                    >Menyusun pentahapan pekerjaan
                    konstruksi/instalasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p733"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p733"
                    >Menyusun spesifikasi sarana dan jasa-jasa
                    yang dibutuhkan untuk pekerjaan
                    konstruksi/instalasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p734"
                    disabled
                  />
                  <label class="form-check-label" for="p734"
                    >Mengawasi pekerjaan
                    konstruksi/instalasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p735"
                    disabled
                  />
                  <label class="form-check-label" for="p735"
                    >Memastikan bahwa pekerjaan
                    konstruksi/instalasi telah selesai dengan
                    memuaskan untuk di-berita-acara-kan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan tugas dan kegiatan pengelolaan
                kerja lapangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p741"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p741"
                    >Melaksanakan tugas pengelolaan kerja
                    lapangan untuk pekerjaan
                    konstruksi/instalasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p742"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p742"
                    >Melakukan tugas pemesanan bahan material,
                    peralatan dan jasa pendukungnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p743"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p743"
                    >Mengembangkan tatalaksana kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p744"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p744"
                    >Mengawasi penanganan bahan material di
                    lapangan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan uji kinerja (commissioning)
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p751"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p751"
                    >Melaksanakan tugas pengembangan program
                    penerimaan hasil pekerjaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p752"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p752"
                    >Melaksanakan program commissioning dan
                    tugas pengawasannya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p753"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p753"
                    >Memastikan bahwa pekerjaan commissioning
                    telah selesai dengan memuaskan untuk
                    di-berita-acara-kan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Merencanakan proses manufaktur/produksi
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p811"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p811"
                    >Menganalisis tata-letak pabrik atau sistem
                    dan aliran kerja dan mengambil
                    langkah-langkah untuk mengoptimasikan
                    fleksibilitas dan efisiensi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p812"
                    disabled
                  />
                  <label class="form-check-label" for="p812"
                    >Menerapkan kaidah-kaidah perencanaan
                    manajemen</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p813"
                    disabled
                  />
                  <label class="form-check-label" for="p813"
                    >Memantau operasi proses dan mengubahnya di
                    mana perlu untuk memperbaiki keluaran
                    (output)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p814"
                    disabled
                  />
                  <label class="form-check-label" for="p814"
                    >Menggunakan berbagai cara analisis seperti
                    analisis lintasan kritis, garis keseimbangan
                    dan programa linier</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p815"
                    disabled
                  />
                  <label class="form-check-label" for="p815"
                    >Mengatur hubungan kerja antara bagian
                    perencanaan produksi dengan tim perancang
                    produk</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p816"
                    disabled
                  />
                  <label class="form-check-label" for="p816"
                    >Membangun barisan kerja untuk pekerjaan
                    manufaktur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p817"
                    disabled
                  />
                  <label class="form-check-label" for="p817"
                    >Melakukan tugas analisis biaya terhadap
                    proses manufaktur</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menjaga dan mengawasi program penjaminan mutu
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p821"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p821"
                    >Memantau dan mengatur kinerja proses
                    produksi/manufaktur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p822"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p822"
                    >Mencari dan melaksanakan cara-cara baru
                    untuk perbaikan terus-menerus atas proses
                    manufaktur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p823"
                    disabled
                  />
                  <label class="form-check-label" for="p823"
                    >Menerapkan kaidah pengendalian mutu</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p824"
                    disabled
                  />
                  <label class="form-check-label" for="p824"
                    >Memulai langkah perbaikan untuk menurunkan
                    tingkat kegagalan produk atau kemacetan
                    sistem produksi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p825"
                    disabled
                  />
                  <label class="form-check-label" for="p825"
                    >Mengembangkan tatalaksana kerja yang
                    khas</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p826"
                    disabled
                  />
                  <label class="form-check-label" for="p826"
                    >Menilai kinerja dan kehandalan
                    pemasok</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan tugas pengoperasian, pengendalian
                dan optimasi proses
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p831"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p831"
                    >Memperhalus dan mengoptimasikan
                    pengendalian operasi dan proses</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p832"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p832"
                    >Melaksanakan tugas operasi dan pengendalian
                    proses</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p833"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p833"
                    >Melaksanakan tugas analisis nilai
                    kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p834"
                    disabled
                  />
                  <label class="form-check-label" for="p834"
                    >Melaksanakan tugas pemeriksaan dan
                    penyelesaian masalah-masalah manufaktur atau
                    proses</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p835"
                    disabled
                  />
                  <label class="form-check-label" for="p835"
                    >Mengembangkan dan melaksanakan proses
                    produksi manufaktur yang fleksibel</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p836"
                    disabled
                  />
                  <label class="form-check-label" for="p836"
                    >Mengembangkan dan melaksanakan tatalaksana
                    ergonomi dan keselamatan pabrik</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan tugas pengelolaan persediaan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p841"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p841"
                    >Mengembangkan tatacara penyediaan dan
                    penanganan bahan baku</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p842"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p842"
                    >Menyusun spesifikasi, mengadakan/membeli
                    dan mengalokasikan bahan baku</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p843"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p843"
                    >Melakukan program optimasi pemakaian bahan
                    baku</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengukur kinerja produksi
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p851"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p851"
                    >Mengukur keluaran proses manufaktur dari
                    segi jumlah, mutu dan harga untuk menilai
                    apakah sasaran produksi telah
                    tercapai</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p852"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p852"
                    >Menganalisis produktifitas untuk menentukan
                    di bagian mana dapat dilakukan
                    perbaikan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p853"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p853"
                    >Menganalisis pemakaian bahan baku dan bahan
                    pakai-habis (consumables) untuk meningkatkan
                    efisiensi dan memperbaiki pelayanan sarana
                    pendukung</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p854"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p854"
                    >Menganalisis tatacara produksi secara umum
                    untuk meningkatkan efisiensi</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Merumuskan kebutuhan dan penggunaan bahan
                material atau komponen khusus
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p911"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p911"
                    >Menemu-kenali ciri-ciri utama suatu
                    kelompok bahan material atau komponen untuk
                    penggunaan tertentu, dan kemungkinan bahan
                    penggantinya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p912"
                    disabled
                  />
                  <label class="form-check-label" for="p912"
                    >Mengkaji penggunaan yang tepat bagi bahan
                    material atau komponen untuk penggunaan
                    tertentu</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p913"
                    disabled
                  />
                  <label class="form-check-label" for="p913"
                    >Membentuk hubungan dengan kejuruan lain
                    untuk dapat memperoleh bantuan
                    kepakaran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p914"
                    disabled
                  />
                  <label class="form-check-label" for="p914"
                    >Mempelajari peluang untuk daur ulang</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p915"
                    disabled
                  />
                  <label class="form-check-label" for="p915"
                    >Mempelajari bahaya terhadap lingkungan atau
                    bahaya lainnya dalam penggunaan atau
                    pembuangan bahan material atau komponen
                    sisa/berlebih</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menetapkan sumber bahan baku pengadaan bahan
                material atau komponen
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p921"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p921"
                    >Mencari lokasi sumber bahan baku yang
                    sesuai</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p922"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p922"
                    >Memilih bahan atau komponen yang biaya
                    pengadaannya terjangkau</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengawasi penyiapan atau pengadaan bahan
                material atau komponen
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p931"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p931"
                    >Menetapkan tatacara penyiapan bahan
                    material</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p932"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p932"
                    >Menentukan interaksi antara berbagai bahan
                    material atau komponen</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p933"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p933"
                    >Melakukan kegiatan pengendalian
                    proses</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menilai sifat bahan material atau komponen
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p941"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p941"
                    >Menemu-kenali rona lingkungan
                    operasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p942"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p942"
                    >Menemu-kenali persyaratan pengujian bahan
                    material atau komponen</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p943"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p943"
                    >Melakukan atau mengawasi, dan
                    mengkaji-nilai hasil pengujian di lapangan
                    dan di laboratorium</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p944"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p944"
                    >Memberikan pengarahan dalam pemeliharaan
                    dan kalibrasi sarana pengujian</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p945"
                    disabled
                  />
                  <label class="form-check-label" for="p945"
                    >Menyiapkan, menyetujui dan mensahkan
                    laporan pengujian</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p946"
                    disabled
                  />
                  <label class="form-check-label" for="p946"
                    >Merekomendasikan bahan material atau
                    komponen untuk pemakaian-pemakaian yang
                    khas</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memilih cara pemeliharaan mutu bahan material
                atau komponen
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p951"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p951"
                    >Menemu-kenali penyebab penurunan mutu
                    seperti aus, korosi, kelelahan dan radiasi
                    ultraviolet</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p952"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p952"
                    >Menggunakan teknik-teknik untuk mengurangi
                    penurunan mutu dan mencegah kegagalan
                    dini</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p953"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p953"
                    >Menggunakan teknik-teknik untuk melihat
                    gejala adanya kemungkinan kegagalan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p954"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p954"
                    >Memilih cara perlakuan (treatment) bahan
                    material yang tepat, seperti perlakuan
                    panas, perlakuan permukaan, dsb</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengelola sumber-daya keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1011"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1011"
                    >Menetapkan dan melaksanakan tujuan dan
                    prioritas kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1012"
                    disabled
                  />
                  <label class="form-check-label" for="p1012"
                    >Merumuskan metoda pendekatan untuk
                    pengelolaan sumber-daya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1013"
                    disabled
                  />
                  <label class="form-check-label" for="p1013"
                    >Melakukan analisis rincian tugas (work
                    breakdown analysis) sehingga tersedia dasar
                    bagi perhitungan kebutuhan
                    sumber-daya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1014"
                    disabled
                  />
                  <label class="form-check-label" for="p1014"
                    >Membuat perkiraan kebutuhan waktu, biaya,
                    bahan dan sumber-daya lainnya untuk suatu
                    pekerjaan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengelola sumber-daya manusia
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1021"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1021"
                    >Mematuhi ketentuan kesehatan dan
                    keselamatan kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1022"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1022"
                    >Menemu-kenali dan menentukan kebutuhan
                    pelatihan bagi tenaga kerja teknis di tempat
                    pekerjaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1023"
                    disabled
                  />
                  <label class="form-check-label" for="p1023"
                    >Melaksanakan program pengembangan
                    pengalaman kerja untuk bawahan, termasuk
                    pelatihan-ulang, penyesuaian pada teknologi
                    baru dan pengembangan ketrampilan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1024"
                    disabled
                  />
                  <label class="form-check-label" for="p1024"
                    >Mengkaji efektifitas program pelatihan di
                    tempat kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1025"
                    disabled
                  />
                  <label class="form-check-label" for="p1025"
                    >Merumuskan kebutuhan pelatihan tenaga kerja
                    non-teknis</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan pengelolaan kewira-usahaan,
                keuangan, dan hukum/kontraktual
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1031"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1031"
                    >Melakukan tugas kaji-nilai ekonomis atas
                    pekerjaan yang dilaksanakan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1032"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1032"
                    >Memahami dampak hukum dari tiap pekerjaan
                    yang dilaksanakan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1033"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1033"
                    >Memahami, menafsirkan dan menerapkan
                    peraturan yang tepat</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1034"
                    disabled
                  />
                  <label class="form-check-label" for="p1034"
                    >Menilai kebutuhan pemasaran dan memberikan
                    saran untuk strategi pemasaran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1035"
                    disabled
                  />
                  <label class="form-check-label" for="p1035"
                    >Mengerjakan tugas pengelolaan risiko</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1036"
                    disabled
                  />
                  <label class="form-check-label" for="p1036"
                    >Memahami kebutuhan kewira-usahaan suatu
                    perusahaan dan bertindak sesuai kebutuhan
                    tersebut dalam hal biaya, waktu dan
                    faktor-faktor lainnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1037"
                    disabled
                  />
                  <label class="form-check-label" for="p1037"
                    >Mengkaji dan menyiapkan rencana
                    usaha</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengelola keterangan produk (product knowledge)
                untuk barang/jasa keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1041"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1041"
                    >Menyiapkan dokumen, brosur, uraian teknis
                    dan spesifikasi mengenai produk barang/jasa
                    keinsinyuran untuk keperluan
                    pemasaran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1042"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1042"
                    >Menyiapkan dokumen, pedoman, buku panduan
                    untuk pemakaian operasi, pemeliharaan,
                    penyetelan dan perbaikan atas produk
                    barang/jasa oleh konsumen</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1043"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1043"
                    >Melakukan pengamatan atas kebutuhan
                    pasar/pelanggan masa-depan terhadap
                    penyempurnaan dan menemu-kenali
                    perubahan/pembaharuan yang perlu atas produk
                    barang/jasa</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1044"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1044"
                    >Memantau dan mengikuti kinerja dan
                    keandalan produk barang/peralatan dan jasa
                    yang dipakai pelanggan dan melakukan
                    perbaikan dan penyempurnaan untuk kepuasan
                    pelanggan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan kaidah-kaidah pemasaran
                barang/jasa keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1051"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1051"
                    >Menyiapkan dan melakukan kajian kebutuhan
                    pasar akan barang/jasa keinsinyuran yang
                    hendak dipasarkan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1052"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1052"
                    >Menyiapkan strategi dan program pentahapan
                    pemasaran untuk menarik minat
                    pasar/pelanggan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1053"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1053"
                    >Melakukan promosi dan paparan pengenalan
                    produk barang/jasa keinsinyuran untuk
                    meyakinkan pelanggan dan pasar</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1054"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1054"
                    >Menyiapkan usulan penawaran produk
                    barang/jasa keinsinyuran secara mandiri atau
                    bersama tim proposal, meliputi proposal
                    teknis, komersial dan kontraktual</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1055"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1055"
                    >Melaksanakan klasifikasi, negosiasi dan
                    memberikan saran solusi/aplikasi teknis,
                    penjelasan batasan tanggungjawab
                    masing-masing untuk meyakinkan pelanggan
                    sampai terlaksananya transaksi/kontrak
                    penjualan produk barang/jasa</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan kaidah-kaidah pelayanan
                purna-jual
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1061"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1061"
                    >Merumuskan dan menjelaskan batas syarat
                    tanggungjawab jaminan kinerja dan perbaikan
                    kerusakan purna-jual (warranty dan guarantee
                    fee)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1062"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1062"
                    >Melaksanakan pelayanan teknis purna-jual
                    dan mengatasi masalah teknis, sesuai
                    tanggungjawab kontraktual</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1063"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1063"
                    >Melaksanakan pelatihan pengembangan
                    keahlian tenaga pemakai (operator) dan
                    pemeliharaan produk</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1064"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1064"
                    >Memelihara persediaan suku-cadang dan
                    mengelola sumber daya untuk pelaksanaan
                    pelayanan purna jual</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1065"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1065"
                    >Melakukan pemantauan ke pelanggan untuk
                    meningkatkan kehandalan pemakaian produk dan
                    kepuasan pelanggan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menyiapkan dan mengembangkan kebijakan umum
                keinsinyuran untuk mendorong sektor pembangunan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1111"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1111"
                    >Menyiapkan dan mengembangkan kebijakan umum
                    melalui pendekatan pengembangan
                    wilayah</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1112"
                    disabled
                  />
                  <label class="form-check-label" for="p1112"
                    >Menyiapkan dan mengembangkan kebijakan umum
                    dengan mengacu pada kelestarian
                    lingkungan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1113"
                    disabled
                  />
                  <label class="form-check-label" for="p1113"
                    >Menyiapkan dan mengembangkan kebijakan umum
                    peningkatan kemampuan rancang-bangun dan
                    perekayasaan produk-produk berbasiskan
                    sumber-daya untuk memacu ekspor</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1114"
                    disabled
                  />
                  <label class="form-check-label" for="p1114"
                    >Menyusun suatu rancangan teknis yang
                    mendorong peningkatan keterpaduan antar
                    sektor pembangunan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1115"
                    disabled
                  />
                  <label class="form-check-label" for="p1115"
                    >Menyusun perencanaan dan atau program
                    (master plan, perencanaan jangka
                    panjang/pendek, dsb.) untuk mendukung
                    pengembangan daerah, termasuk
                    perkotaan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menyiapkan dan mengembangkan kebijakan investasi
                teknis
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1121"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1121"
                    >Menyiapkan kebijakan teknis yang mendorong
                    peran serta swasta dan masyarakat dalam
                    pembangunan sektor-sektor publik</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1122"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1122"
                    >Mengembangkan sistem manajemen teknis yang
                    efektif dan efisien sehingga diperoleh
                    produk perencanaan yang matang, pelaksanaan
                    yang tepat dan pengawasan yang ketat</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1123"
                    disabled
                  />
                  <label class="form-check-label" for="p1123"
                    >Menyiapkan upaya-upaya penajaman prioritas
                    pelaksanaan pembangunan guna memanfaatkan
                    sumber-daya yang terbatas secara
                    optimal</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Merumuskan kebijaksanaan dan melaksanakan tugas
                pengaturan teknis untuk keselamatan dan
                kesejahteraan masyarakat
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1131"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1131"
                    >Membuat peraturan/pedoman pembangunan dan
                    penggunaan prasarana dan sarana umum bagi
                    peningkatan jaminan keselamatan dan
                    kesejahteraan masyarakat</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1132"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1132"
                    >Mengembangkan rancangan teknologi
                    tepat-guna, yang mempertimbangkan kemudahan
                    dan kesinambungan operasi dan
                    pemeliharaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1133"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1133"
                    >Mengembangkan rancangan teknologi sederhana
                    yang sesuai untuk daerah pedesaan dan
                    mendukung upaya pengentasan kemiskinan serta
                    menciptakan lapangan kerja ketrampilan
                    rendah</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1134"
                    disabled
                  />
                  <label class="form-check-label" for="p1134"
                    >Mengembangkan rancangan teknis untuk
                    membuka dan meningkatkan pertumbuhan daerah
                    terpencil, terkucil dan perbatasan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan tugas pengadaan asset
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1141"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1141"
                    >Menemu-kenali kebutuhan akan aset
                    baru</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1142"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1142"
                    >Menyiapkan spesifikasi atau uraian untuk
                    usulan pengadaan aset baru</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1143"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1143"
                    >Melaksanakan kegiatan pengadaan aset</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1144"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1144"
                    >Melaksanakan pengujian untuk penerimaan
                    pada saat penyerahan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan tugas pengendalian dan optimasi
                asset
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1151"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1151"
                    >Merumuskan parameter kinerja aset</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1152"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1152"
                    >Menyiapkan petunjuk operasi dan melatih
                    operator</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1153"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1153"
                    >Merencanakan dan melakukan tugas pemantauan
                    kondisi aset</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1154"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1154"
                    >Mengawasi pengoperasian sistem-sistem
                    aset</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1155"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1155"
                    >Mengatur pengoperasian aset untuk menjamin
                    pelayanan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1156"
                    disabled
                  />
                  <label class="form-check-label" for="p1156"
                    >Mempelajari kemungkinan memperpanjang umur
                    aset</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan atau mengawasi tugas pemeliharaan
                asset
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1161"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1161"
                    >Mengembangkan kaidah pemeliharaan dan
                    parameter kinerja aset</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1162"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1162"
                    >Menyiapkan jadwal pemeliharaan
                    pencegahan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1163"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1163"
                    >Menyiapkan petunjuk/panduan untuk
                    pemeliharaan perbaikan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1164"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1164"
                    >Menetapkan, dan atau merancangkan, alat
                    bantu uji pemeliharaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1165"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1165"
                    >Mengawasi tugas pemeliharaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1166"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1166"
                    >Menentukan kebutuhan persediaan
                    suku-cadang</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1167"
                    disabled
                  />
                  <label class="form-check-label" for="p1167"
                    >Melaksanakan pemeriksaan dan atau analisis
                    atas kegagalan serta dampak akibatnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1168"
                    disabled
                  />
                  <label class="form-check-label" for="p1168"
                    >Melaksanakan analisis terhadap modus
                    kegagalan dan akibatnya</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Merencanakan dan melaksanakan penghapusan asset
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1171"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1171"
                    >Mempelajari penentuan umur ekonomis
                    aset</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1172"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1172"
                    >Menyelidiki penghapusan aset secara
                    ekonomis dan layak lingkungan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1173"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1173"
                    >Merekomendasikan langkah penghapusan
                    aset</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p1174"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p1174"
                    >Melakukan pemulihan lahan bekas lokasi
                    aset</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="kualifikasi-profesional.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <div class="d-flex justify-content-between m-4 mt-0">
        <div>
          <a
            href="/kualifikasi-profesional"
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
            href="/kualifikasi-profesional"
            class="btn btn-primary text-white"
            >Simpan</a
          >
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>
@endsection

