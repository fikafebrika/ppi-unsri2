@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Beranda') }}
@endsection

@section('sidebar')
<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
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
              <a href="/data-pribadi/pendidikan_formal" class="menu-link">
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
      <a href="/rekognisi-pencapaian/" class="menu-link">
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
    
    {{-- <li class="menu-item">
      <a href="/" class="menu-link">
        <i class="menu-icon tf-icons bx bx-power-off"></i>
        <div data-i18n="Logout" action="/" method="post">Logout</div>
      </a>
    </li> --}}
</ul>
@endsection

@section('content')
<div class="card">
    <div class="card-body pb-2">
        <div class="card-title">
            <h5 class="text-nowrap fw-semibold">MENU</h5>
        </div>
    </div>
    <div class="row mx-2 text-center">
        <div class="col-md-4 mb-4">
            <a href="/profil">
                <div class="card border border-1 border-light">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="avatar badge bg-primary w-px-35 h-px-35">
                                <i class="bx bx-layout mt-1"></i>
                            </div>
                        </div>
                        <h5 class="card-title mb-2 text-nowrap">
                            Klaim Pencapaian
                        </h5>
                        {{-- <small class="text-success fw-semibold">
                            <i class="bx bx-check-circle"></i>
                            Tersedia
                        </small> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="/rekognisi-pencapaian">
                <div class="card border border-1 border-light">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="avatar badge bg-primary w-px-35 h-px-35">
                                <i class="bx bx-dock-top mt-1"></i>
                            </div>
                        </div>
                        <h5 class="card-title mb-2 text-nowrap">
                            Rekognisi Pencapaian
                        </h5>
                        {{-- <small class="text-danger fw-semibold">
                            <i class="bx bx-time"></i>
                            Belum Tersedia
                        </small> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="/kartu-hasil-studi">
                <div class="card border border-1 border-light">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="avatar badge bg-primary w-px-35 h-px-35">
                                <i class="bx bx-file mt-1"></i>
                            </div>
                        </div>
                        <h5 class="card-title mb-2">
                            Kartu Hasil Studi
                        </h5>
                        {{-- <small class="text-danger fw-semibold">
                            <i class="bx bx-time"></i>
                            Belum Tersedia
                        </small> --}}
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

