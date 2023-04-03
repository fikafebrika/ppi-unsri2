@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Beranda') }}
@endsection

@section('sidebar')
<li class="menu-item active">
    <a href="/verifikator/beranda" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Beranda">Beranda</div>
    </a>
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
<div class="card" id="daftarMahasiswa">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="card-header">Daftar Mahasiswa</h5>
    </div>
    <div class="table-responsive mx-3 mb-2 text-center">
        <table class="table table-hover">
            <thead class="align-middle">
                <tr>
                    <th class="text-lg-start">Mahasiswa</th>
                    <th>No. KTA (6 Digit Terakhir)</th>
                    <th>Badan Kejurusan</th>
                    <th>Profesi Utama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-lg-start">
                        <img
                            src="{{asset('verifikator/assets/img/avatars/1.png')}}"
                            alt=""
                            class="rounded me-lg-2 my-2"
                            width="90"
                            height="120"
                        />
                        <strong>Bambang Pamungkas</strong>
                    </td>
                    <td>924160</td>
                    <td>Teknik Informatika</td>
                    <td>Praktisi</td>
                    <td>
                        <a
                            href="/verifikator/data-pribadi/pendidikan-formal"
                            class="btn btn-primary"
                            >Verifikasi</a
                        >
                    </td>
                </tr>
                <tr>
                    <td class="text-lg-start">
                        <img
                            src="{{asset('verifikator/assets/img/avatars/1.png')}}"
                            alt=""
                            class="rounded me-lg-2 my-2"
                            width="90"
                            height="120"
                        />
                        <strong>Bambang Pamungkas</strong>
                    </td>
                    <td>924160</td>
                    <td>Teknik Informatika</td>
                    <td>Praktisi</td>
                    <td>
                        <a
                            href="/verifikator/data-pribadi/pendidikan-formal"
                            class="btn btn-primary"
                            >Verifikasi</a
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
                            <a class="page-link" href="javascript:void(0);">
                                <i class="tf-icon bx bx-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);">
                                <i class="tf-icon bx bx-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

