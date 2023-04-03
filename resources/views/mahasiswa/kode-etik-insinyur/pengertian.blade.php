@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Pengertian') }}
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
        <li class="menu-item active open">
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
            <li class="menu-item active">
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
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <h5 class="card-header">
        Pengertian, Pendapat, & Pengalaman Sendiri
      </h5>
    </div>
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover text-start">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>
                Pengertian, Pendapat, & Pengalaman Sendiri
            </th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            {{-- II.2 KOLOM A --}}
            <td>
              Seorang insinyur harus mampu
              mempertanggungjawabkan ilmunya dalam kehidupannya.
              Sebagaimana esensi dari seorang insiyur adalah,
              maka orang yang menggunakan pengetahuan ilmiah
              untuk menyelesaikan masalah praktis menggunakan
              teknologi, maka sudah seharusnya kehadiran seorang
              insinyur mampu memberi manfaat bagi lingkungan
              sekitarnya. Insinyur selayaknya mampu memprediksi
              resiko dan tantangan dari setiap keputusan yang
              diambil, serta mampu memberikan penyelesaian
              masalah yang real. Selain itu, insinyur dituntut
              untuk tidak mengabaikan aspek keselamatan dan
              kesehatan dalam setiap penyelesaian masalah yang
              diterapkan. Seorang insinyur dapat dikatakan
              berkode etik apabila mengerjakan tugasnya dengan
              tanggung jawab dan integritas, serta mampu pula
              memperhatikan aspek sosial dan lingkungan. Seorang
              Insinyur harus memiliki moral intelektual yang
              mampu memahami lingkungan sosial dengan bijak dan
              arif.
            </td>
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              <span class="badge bg-label-warning me-1"
                >Pending</span
              >
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            <td>
              <a
                href="/kode-etik-insinyur/pengertian/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            {{-- II.2 KOLOM A --}}
            <td>
              Seorang insinyur harus mampu
              mempertanggungjawabkan ilmunya dalam kehidupannya.
              Sebagaimana esensi dari seorang insiyur adalah,
              maka orang yang menggunakan pengetahuan ilmiah
              untuk menyelesaikan masalah praktis menggunakan
              teknologi, maka sudah seharusnya kehadiran seorang
              insinyur mampu memberi manfaat bagi lingkungan
              sekitarnya. Insinyur selayaknya mampu memprediksi
              resiko dan tantangan dari setiap keputusan yang
              diambil, serta mampu memberikan penyelesaian
              masalah yang real. Selain itu, insinyur dituntut
              untuk tidak mengabaikan aspek keselamatan dan
              kesehatan dalam setiap penyelesaian masalah yang
              diterapkan. Seorang insinyur dapat dikatakan
              berkode etik apabila mengerjakan tugasnya dengan
              tanggung jawab dan integritas, serta mampu pula
              memperhatikan aspek sosial dan lingkungan. Seorang
              Insinyur harus memiliki moral intelektual yang
              mampu memahami lingkungan sosial dengan bijak dan
              arif.
            </td>
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              <span class="badge bg-label-warning me-1"
                >Pending</span
              >
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            <td>
              <a
                href="/kode-etik-insinyur/pengertian/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td>
          </tr>
        </tbody>
      </table>
      <div class="d-flex justify-content-between mt-3 mx-1">
        <div><small>Showing 1 to 2 of 2 entries</small></div>
        <div>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-left"></i
                ></a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0);"
                  >1</a
                >
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);"
                  >2</a
                >
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);"
                  >3</a
                >
              </li>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-right"></i
                ></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection

