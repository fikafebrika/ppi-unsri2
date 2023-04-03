@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Rekognisi Pencapaian') }}
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
    <li class="menu-item open">
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
    <li class="menu-item active">
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
{{-- Komposisi Penilaian Untuk Profesi Utama "PRAKTISI" --}}
<div class="card mb-3">
    <h5 class="card-header">Kode Etik Profesi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Organisasi Profesi & Organisasi Lainnya yang Dimasuki</strong
              >
            </td>
            <td>30%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>25%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Profesionalisme</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Pendidikan Formal</strong>
            </td>
            <td>25%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>25%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">
      Kesehatan dan Keselamatan Kerja dan Lingkungan
    </h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Kualifikasi Profesional</strong
              >
            </td>
            <td>100%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Studi Kasus</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>65%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Seminar, Lokakarya dan/atau Diskusi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>65%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Praktek Keinsinyuran</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Kualifikasi Profesional</strong
              >
            </td>
            <td>75%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong
              >
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>

{{-- Komposisi Penilaian Untuk Profesi Utama "DOSEN" --}}
{{-- <div class="card mb-3">
    <h5 class="card-header">Kode Etik Profesi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Organisasi Profesi & Organisasi Lainnya yang Dimasuki</strong
              >
            </td>
            <td>30%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Profesionalisme</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Pendidikan Formal</strong>
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">
      Kesehatan dan Keselamatan Kerja dan Lingkungan
    </h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Kualifikasi Profesional</strong
              >
            </td>
            <td>100%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Studi Kasus</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>35%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Seminar, Lokakarya dan/atau Diskusi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Pelajaran Keinsinyuran</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>30%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>30%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>25%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Praktek Keinsinyuran</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Pengalaman Mengajar Pelajaran Keinsinyuran</strong
              >
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong
              >
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div> --}}
@endsection

