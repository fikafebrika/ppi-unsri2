@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Kartu Hasil Studi') }}
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
    <li class="menu-item">
      <a href="/rekognisi-pencapaian" class="menu-link">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Rekognisi Pencapaian">Rekognisi Pencapaian</div>
      </a>
    </li>
    <li class="menu-item active">
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
<div class="card invoice-preview-card">
    <div class="card-body">
        <div class="text-center">
          <p class="text-uppercase mb-0">Kementerian Pendidikan dan Kebudayaan</p>
          <p class="text-uppercase fw-bold">Universitas Sriwijaya</p>
          <h5 class="text-uppercase fw-bold py-1">KARTU HASIL STUDI</h5>
          <div>
            <a href="#" class="btn btn-primary me-2 text-white"
              >Download</a
            >
          </div>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
      <div class="row px-sm-3 pt-sm-3 p-0 text-uppercase align-items-center">
        <div class="col-2">
            <img src="{{asset('mahasiswa/assets/img/avatars/1.png')}}" alt="" height="160"
            width="120" class="rounded">
        </div>
        <div class="col-10">
          <table>
            <tbody>
              <tr>
                <td class="pe-3">Nama</td>
                <td>: Bambang Pamungkas</td>
              </tr>
              <tr>
                <td class="pe-3">No KTA</td>
                <td>: 09031281924160</td>
              </tr>
              <tr>
                <td class="pe-3">Tempat dan Tanggal Lahir</td>
                <td>: Palembang, 13 Februari 2002</td>
              </tr>
              <tr>
                <td class="pe-3">Program Studi</td>
                <td>: Program Profesi Insinyur</td>
              </tr>
              <tr>
                <td class="pe-3">Jalur Studi</td>
                <td>: Rekognisi Pembelajaran Lampau</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="table-responsive m-3">
      <table
        class="table border-top m-0 text-center table-hover"
      >
        <thead>
          <tr>
            <th>No.</th>
            <th class="text-start">Mata Kuliah</th>
            <th>SKS</th>
            <th>NILAI</th>
            <th>PREDIKAT</th>
            <th class="text-nowrap">(KXN)</th>
          </tr>
        </thead>
        <tbody class="text-uppercase">
          <tr>
            <td>1</td>
            <td class="text-start">
              Kode Etik Profesi
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>2</td>
            <td class="text-start">
              Profesionalisme
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>3</td>
            <td class="text-start">
              Kesehatan dan Keselamatan Kerja dan Lingkungan
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>4</td>
            <td class="text-start">
              Studi Kasus
            </td>
            <td>4</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>5</td>
            <td class="text-start">
              Seminar, Lokakarya dan/atau Diskusi
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>6</td>
            <td class="text-start">
              Praktek Keinsinyuran
            </td>
            <td>12</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0 fw-bold">
          <tr>
            <td colspan="2" class="text-start">SKS yang Ditempuh</td>
            <td colspan="4">0</td>
          </tr>
          <tr>
            <td colspan="2" class="text-start">Total Kredit yang Ditempuh</td>
            <td colspan="4">0</td>
          </tr>
          <tr>
            <td colspan="2" class="text-start">
              Indeks Prestasi Semester
            </td>
            <td colspan="4">0</td>
          </tr>
          <tr>
            <td colspan="2" class="text-start">
              Indeks Prestasi Kumulatif
            </td>
            <td colspan="4">0</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection

