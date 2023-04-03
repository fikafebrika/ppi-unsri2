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
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/pendidikan-formal" class="menu-link">
                        <div data-i18n="Pendidikan Formal">Pendidikan Formal</div>
                    </a>
                </li>
                <li class="menu-item active">
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
    <form
      id="formAccountSettings"
      method="POST"
      onsubmit="return false"
    >
      <h5 class="card-header">Data Pencapaian</h5>
      <div class="card-body pb-3">
        <div class="row">
            {{-- I.3 Kolom B --}}
            <div class="mb-3 col-md-6">
                <label for="nama-organisasi" class="form-label">Nama Organisasi</label>
                <input type="text" class="form-control bg-white" id="nama-organisasi" name="nama-organisasi" placeholder="Nama Organisasi" value="Universitas Sriwijaya" disabled
                />
            </div>
            {{-- I.3 Kolom C --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="jenis-organisasi">Jenis Organisasi</label>
                <select id="jenis-organisasi" class="select2 form-select bg-white" disabled>
                    <option value="">Pilih Jenis Organisasi</option>
                    <option value="pii" selected>
                        Organisasi PII
                    </option>
                    <option value="non-pii">
                        Organisasi Keinsinyuran Non PII
                    </option>
                    <option value="non-keinsinyuran">
                        Organisasi Non Keinsinyuran
                    </option>
                </select>
            </div>
            {{-- I.3 Kolom D --}}
            <div class="mb-3 col-md-6">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control bg-white" id="kota" name="kota" placeholder="Kota" value="Palembang" disabled/>
            </div>
            {{-- I.3 Kolom E --}}
            <div class="mb-3 col-md-6">
                <label for="negara" class="form-label">Negara</label>
                <input type="text" class="form-control bg-white" id="negara" name="negara" placeholder="Negara" value="Indonesia" disabled/>
            </div>
            {{-- I.3 Kolom F --}}
            <div class="mb-3 col-md-6">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control bg-white" id="periode" name="periode" placeholder="Periode" value="" disabled/>
            </div>
            {{-- I.3 Kolom G --}}
            <div class="mb-3 col-md-6">
                <label for="lama-anggota" class="form-label">Sudah Berapa Lama Menjadi Anggota?</label>
                <select id="lama-anggota" class="select2 form-select bg-white" disabled>
                    <option value="">Pilih Sudah Berapa Lama Menjadi Anggota?</option>
                    <option value="1-5" selected>1 - 5 Tahun</option>
                    <option value="6-10">6 - 10 Tahun</option>
                    <option value="11-15">11 - 15 Tahun</option>
                    <option value="lebih-dari-15">> 15 Tahun</option>
                </select>
            </div>
            {{-- I.3 Kolom H --}}
            <div class="mb-3 col-md-6">
                <label for="jabatan" class="form-label">Jabatan Dalam Organisasi</label>
                <select id="jabatan" class="select2 form-select bg-white" disabled>
                    <option value="">
                        Pilih Jabatan Dalam Organisasi
                    </option>
                    <option value="anggota-biasa" selected>
                        Anggota Biasa
                    </option>
                    <option value="anggota-pengurus">
                        Anggota Pengurus
                    </option>
                    <option value="pimpinan">Pimpinan</option>
                </select>
            </div>
            {{-- I.3 Kolom I --}}
            <div class="mb-3 col-md-6">
                <label for="tingkatan" class="form-label">Tingkatan Organisasi</label>
                <select id="tingkatan" class="select2 form-select bg-white" disabled>
                    <option value="">
                        Pilih Tingkatan Organisasi
                    </option>
                    <option value="lokal" selected>
                        Organisasi Lokal (Bukan Nasional)
                    </option>
                    <option value="nasional">
                        Organisasi Nasional
                    </option>
                    <option value="regional">
                        Organisasi Regional
                    </option>
                    <option value="internasional">
                        Organisasi Internasional
                    </option>
                </select>
            </div>
            {{-- I.3 Kolom J --}}
            <div class="mb-3 col-md-6">
                <label for="lingkup" class="form-label">Lingkup Kegiatan Organisasi</label>
                <select id="lingkup" class="select2 form-select bg-white" disabled>
                    <option value="">
                        Pilih Lingkup Kegiatan Organisasi
                    </option>
                    <option value="asosiasi-profesi" selected>
                        Asosiasi Profesi
                    </option>
                    <option value="lembaga-pemerintah">
                        Lembaga Pemerintah
                    </option>
                    <option value="lembaga-pendidikan">
                        Lembaga Pendidikan
                    </option>
                    <option value="bumn">
                        Badan Usaha Milik Negara
                    </option>
                    <option value="badan-usaha-swasta">
                        Badan Usaha Swasta
                    </option>
                    <option value="organisasi-kemasyarakatan">
                        Organisasi Kemasyarakatan
                    </option>
                    <option value="lain-lain">Lain-lain</option>
                </select>
            </div>
            {{-- I.3 Kolom K --}}
            <div class="mb-3">
                <label for="aktifitas" class="form-label">Aktifitas Dalam Organisasi</label>
                <textarea name="aktifitas" id="aktifitas" class="form-control bg-white" placeholder="Aktifitas Dalam Organisasi" disabled rows="5"></textarea>
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
                Mengembangkan dan mewujudkan tanggungjawab
                kecendekiaan dan kepedulian profesi keinsinyuran
                kepada bangsa, negara dan komunitas
                internasional
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w111"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w111"
                    >Menyadari tanggungjawab kecendekiaan
                    Insinyur Profesional bagi memahami dan
                    menjunjung falsafah dan nilai Pancasila
                    sebagai falsafah dasar masyarakat bangsa
                    Indonesia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w112"
                    disabled
                  />
                  <label class="form-check-label" for="w112"
                    >Menghayati dan senantiasa berusaha
                    mengamalkan nilai dan jiwa Pancasila dalam
                    menjalankan profesi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w113"
                    disabled
                  />
                  <label class="form-check-label" for="w113"
                    >Berpedoman kepada konstitusi dan
                    perundang-undangan yang berlaku di Negara
                    Kesatuan Republik Indonesia dalam
                    menjalankan profesi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w114"
                    disabled
                  />
                  <label class="form-check-label" for="w114"
                    >Menjunjung rasa kesetiakawanan nasional dan
                    rasa kepedulian sosial dan berusaha
                    mendorong kewirausahaan dan kesejahteraan
                    masyarakat menuju cita-cita Bangsa dan
                    Negara</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w115"
                    disabled
                  />
                  <label class="form-check-label" for="w115"
                    >Mengembangkan wawasan kebangsaan yang kuat
                    dan dengan sadar menumbuhkan kepercayaan
                    diri membangun kemandirian nasional dalam
                    profesinya dan dalam mengembangkan kerjasama
                    di komunitas internasional</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menghayati serta mematuhi Kode Etik Insinyur
                Indonesia dan tatalaku profesi yang berlaku
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w121"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w121"
                    >Menempatkan tanggungjawab pada
                    kesejahteraan, kesehatan dan keselamatan
                    masyarakat di atas tanggungjawabnya kepada
                    profesi, kepada kepentingan golongan, atau
                    kepada rekan sesama insinyur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w122"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w122"
                    >Bertindak dengan menjunjung tinggi
                    kehormatan, martabat dan nilai luhur
                    profesi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w123"
                    disabled
                  />
                  <label class="form-check-label" for="w123"
                    >Melakukan pekerjaan, hanya dalam batasan
                    kompetensinya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w124"
                    disabled
                  />
                  <label class="form-check-label" for="w124"
                    >Mengembangkan nama baik berdasarkan
                    prestasi dan tidak bersaing secara
                    curang</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w125"
                    disabled
                  />
                  <label class="form-check-label" for="w125"
                    >Menerapkan kemampuan profesionalnya untuk
                    kepentingan pemberi kerja keinsinyuran
                    secara penuh amanah</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w126"
                    disabled
                  />
                  <label class="form-check-label" for="w126"
                    >Memberikan keterangan, pendapat atau
                    pernyataan secara obyektif berdasarkan
                    kebenaran dan dalam cakupan
                    pengetahuannya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w127"
                    disabled
                  />
                  <label class="form-check-label" for="w127"
                    >Melakukan pengembangan kemampuan
                    profesional secara berkelanjutan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w128"
                    disabled
                  />
                  <label class="form-check-label" for="w128"
                    >Secara aktif membantu dan mendorong rekan
                    kerjanya untuk memajukan pengetahuan dan
                    pengalaman mereka</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami, menerapkan, serta mengembangkan
                wawasan dan kaidah-kaidah kelestarian lingkungan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w131"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w131"
                    >Menyadari bahwa saling ketergantungan dan
                    keaneka-ragaman ekosistem adalah dasar bagi
                    kelangsungan hidup manusia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w132"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w132"
                    >Menyadari keterbatasan daya dukung
                    lingkungan hidup untuk menyerap perubahan
                    yang dibuat manusia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w133"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w133"
                    >Menggalakkan tindakan keinsinyuran yang
                    diperlukan untuk memperbaiki, mempertahankan
                    dan memulihkan lingkungan hidup</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w134"
                    disabled
                  />
                  <label class="form-check-label" for="w134"
                    >Menggalakkan penggunaan yang bijaksana atas
                    sumber-daya tak terbarukan dengan
                    memperkecil atau mendaur-ulang limbah dan
                    mengembangkan sumber-daya alternatif lain
                    sejauh mungkin</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w135"
                    disabled
                  />
                  <label class="form-check-label" for="w135"
                    >Berusaha mencapai tujuan pekerjaan
                    keinsinyurannya dengan penggunaan bahan baku
                    dan enerji secara hemat dan dengan
                    menerapkan kaidah pengelolaan lingkungan
                    berkelanjutan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w136"
                    disabled
                  />
                  <label class="form-check-label" for="w136"
                    >Memperhatikan keseluruhan dampak dari
                    siklus hidup produk dan proyek terhadap
                    lingkungan hidup</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w137"
                    disabled
                  />
                  <label class="form-check-label" for="w137"
                    >Memperhitungkan pengaruh yang mungkin
                    muncul dari tindakan keinsinyuran terhadap
                    faktor budaya atau warisan sejarah</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengemban tanggungjawab profesional atas
                tindakan dan karyanya
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w141"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w141"
                    >Memperhitungkan risiko dan tanggung-gugat
                    (liabilities) profesional, dan sanggup
                    bertanggungjawab untuk itu</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w142"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w142"
                    >Menerapkan dengan tepat persyaratan
                    kesehatan dan keselamatan kerja (K-3)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w143"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w143"
                    >Menyelidiki kebutuhan keselamatan
                    masyarakat dan bertindak untuk memecahkan
                    masalah keselamatan yang mungkin
                    timbul</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w144"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w144"
                    >Mengambil tindakan pencegahan yang tepat
                    dalam menangani pekerjaan yang
                    berbahaya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w145"
                    disabled
                  />
                  <label class="form-check-label" for="w145"
                    >Memperhatikan kaidah-kaidah pencegahan dan
                    penanganan bencana alam serta pemulihan
                    akibatnya</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="data-pribadi-organisasi.html"
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
            <a href="/verifikator/data-pribadi/organisasi" class="btn btn-secondary"
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
              href="/verifikator/data-pribadi/organisasi"
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

