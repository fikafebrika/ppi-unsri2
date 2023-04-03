@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Pengalaman Mengajar') }}
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
        <li class="menu-item">
          <a href="/kualifikasi-profesional" class="menu-link">
            <div data-i18n="Kualifikasi Profesional">
              Kualifikasi Profesional
            </div>
          </a>
        </li>
        <li class="menu-item active">
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
          {{-- IV KOLOM B --}}
            <div class="mb-3 col-md-6">
            <label
              for="nama-perguruan-tinggi"
              class="form-label"
              >Nama Perguruan Tinggi/ Lembaga</label
            >
            <input
              class="form-control"
              type="text"
              id="nama-perguruan-tinggi"
              name="nama-perguruan-tinggi"
              placeholder="Nama Perguruan Tinggi/ Lembaga"
              value="Universitas Sriwijaya"

            />
          </div>
          {{-- IV KOLOM C --}}
          <div class="mb-3">
            <label for="nama-mata-ajaran" class="form-label"
              >Nama Mata Ajaran & Uraian Singkat yang Diajarkan/ Dikembangkan</label
            >
            <textarea
            name="nama-mata-ajaran"
            id="nama-mata-ajaran"
            class="form-control"
            placeholder="Nama Mata Ajaran & Uraian Singkat yang Diajarkan/ Dikembangkan"
             rows="5"
          ></textarea>
          </div>
          {{-- IV KOLOM D --}}
          <div class="mb-3 col-md-6">
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
          {{-- IV KOLOM E --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="periode"
              >Periode</label
            >
            <select
              id="periode"
              class="select2 form-select"

            >
              <option value="">Pilih Periode</option>
              <option value="1-9" selected>1 - 9 Tahun</option>
              <option value="10-14">10 - 14 Tahun</option>
              <option value="15-19">15 - 19 Tahun</option>
              <option value="lebih-dari-20">> 20 Tahun</option>
            </select>
          </div>
          {{-- IV KOLOM F --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="jabatan"
              >Jabatan pada Perguruan Tinggi/ Lembaga</label
            >
            <select
              id="jabatan"
              class="select2 form-select"

            >
              <option value="">
                Pilih Jabatan pada Perguruan Tinggi/ Lembaga
              </option>
              <option value="staf-pengajar" selected>
                Staf Pengajar
              </option>
              <option value="pimpinan">Pimpinan</option>
            </select>
          </div>
          {{-- IV KOLOM G --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="sks"
              >Jumlah Jam/ SKS</label
            >
            <select
              id="sks"
              class="select2 form-select"

            >
              <option value="">Pilih Jumlah Jam/ SKS</option>
              <option value="1-sks" selected>
                1 SKS/ 15 Jam
              </option>
              <option value="2-3-sks">
                2 - 3 SKS/ 30 - 45 Jam
              </option>
              <option value="4-sks">4 SKS/ 60 Jam</option>
            </select>
          </div>
          {{-- IV KOLOM H --}}
          <div class="mb-3">
            <label for="uraian" class="form-label"
              >Nama Mata Ajaran atau Uraian Singkat yang Diajarkan/
              Dikembangkan</label
            >
            <textarea
              name="uraian"
              id="uraian"
              class="form-control"
              placeholder="Nama Mata Ajaran atau Uraian Singkat yang Diajarkan/ Dikembangkan" rows="5"

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
                Mengembangkan program pendidikan dan/atau
                pelatihan keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p511"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p511"
                    >Menemu-kenali kebutuhan pengajaran dan atau
                    pelatihan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p512"
                    disabled
                  />
                  <label class="form-check-label" for="p512"
                    >Merencanakan pengajaran untuk pendidikan
                    tingkat lanjutan atau rencana pelatihan
                    keinsinyuran untuk suatu lembaga
                    pelatihan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p513"
                    disabled
                  />
                  <label class="form-check-label" for="p513"
                    >Mengembangkan program pelatihan kerja
                    praktek</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p514"
                    disabled
                  />
                  <label class="form-check-label" for="p514"
                    >Mengembangkan kurikulum, silabus atau
                    latihan keinsinyuran</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melaksanakan program pendidikan dan/atau
                pelatihan keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p521"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p521"
                    >Mengembangkan proses belajar-mengajar untuk
                    pendidikan dan pelatihan keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p522"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p522"
                    >Mengembangkan rencana pengembangan
                    pengalaman kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p523"
                    disabled
                  />
                  <label class="form-check-label" for="p523"
                    >Mengelola program dalam mana siswa atau
                    peserta latihan memperoleh teori
                    keinsinyuran dan pengalaman praktis</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p524"
                    disabled
                  />
                  <label class="form-check-label" for="p524"
                    >Melaksanakan secara efektif kegiatan
                    pengajaran, pengembangan, dan belajar dalam
                    bentuk yang paling tepat untuk sesuatu
                    keadaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p525"
                    disabled
                  />
                  <label class="form-check-label" for="p525"
                    >Menggunakan secara efektif teknologi
                    pendidikan dan pelatihan untuk mendukung
                    pengajaran, pengembangan dan proses belajar
                    dalam program pendidikan atau pelatihan
                    keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p526"
                    disabled
                  />
                  <label class="form-check-label" for="p526"
                    >Mengembangkan kandungan khas suatu program
                    pelatihan keinsinyuran melalui penelitian,
                    pengkajian, percobaan dan sebagainya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p527"
                    disabled
                  />
                  <label class="form-check-label" for="p527"
                    >Menguji peserta pendidikan dan latihan
                    keinsinyuran secara formatif dan
                    sumatif</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p528"
                    disabled
                  />
                  <label class="form-check-label" for="p528"
                    >Menilai kedaya-gunaan program pendidikan
                    dan atau pelatihan keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p529"
                    disabled
                  />
                  <label class="form-check-label" for="p529"
                    >Mengkaji-ulang program pendidikan dan atau
                    pelatihan keinsinyuran</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="pengalaman-mengajar.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <div class="d-flex justify-content-between m-4 mt-0">
        <div>
          <a
            href="/pengalaman-mengajar"
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
            href="/pengalaman-mengajar"
            class="btn btn-primary text-white"
            >Simpan</a
          >
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>
@endsection

