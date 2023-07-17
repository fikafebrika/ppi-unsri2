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
                <li class="menu-item {{ Request::is('verifikator/data-pribadi/pendidikan-formal*') ? 'active' : '' }}">
                    <a href="/verifikator/data-pribadi/pendidikan-formal/{{ $userId }}" class="menu-link">
                        <div data-i18n="Pendidikan Formal">Pendidikan Formal</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/data-pribadi/organisasi*') ? 'active' : '' }}">
                    <a href="/verifikator/data-pribadi/organisasi/{{ $userId }}" class="menu-link">
                        <div data-i18n="Organisasi">Organisasi</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/data-pribadi/tanda-penghargaan*') ? 'active' : '' }}">
                    <a href="/verifikator/data-pribadi/tanda-penghargaan/{{ $userId }}" class="menu-link">
                        <div data-i18n="Tanda Penghargaan">Tanda Penghargaan</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/data-pribadi/pelatihan*') ? 'active' : '' }}">
                    <a href="/verifikator/data-pribadi/pelatihan/{{ $userId }}" class="menu-link">
                        <div data-i18n="Pelatihan">Pelatihan</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/data-pribadi/sertifikat*') ? 'active' : '' }}">
                    <a href="/verifikator/data-pribadi/sertifikat/{{ $userId }}" class="menu-link">
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
                <li class="menu-item {{ Request::is('verifikator/kode-etik-insinyur/referensi*') ? 'active' : '' }}">
                    <a href="/verifikator/kode-etik-insinyur/referensi/{{ $userId }}" class="menu-link">
                        <div data-i18n="Referensi">Referensi</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/kode-etik-insinyur/pengertian*') ? 'active' : '' }}">
                    <a href="/verifikator/kode-etik-insinyur/pengertian/{{ $userId }}" class="menu-link">
                        <div data-i18n="Pengertian">Pengertian</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Request::is('verifikator/kualifikasi-profesional*') ? 'active' : '' }}">
            <a href="/verifikator/kualifikasi-profesional/{{ $userId }}" class="menu-link">
                <div data-i18n="Kualifikasi Profesional">Kualifikasi Profesional</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('verifikator/pengalaman-mengajar*') ? 'active' : '' }}">
            <a href="/verifikator/pengalaman-mengajar/{{ $userId }}" class="menu-link">
                <div data-i18n="Pengalaman Mengajar">Pengalaman Mengajar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Publikasi">Publikasi</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item {{ Request::is('verifikator/publikasi/karya-tulis*') ? 'active' : '' }}">
                    <a href="/verifikator/publikasi/karya-tulis/{{ $userId }}" class="menu-link">
                        <div data-i18n="Karya Tulis">Karya Tulis</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/publikasi/makalah*') ? 'active' : '' }}">
                    <a href="/verifikator/publikasi/makalah/{{ $userId }}" class="menu-link">
                        <div data-i18n="Makalah/ Tulisan">Makalah/ Tulisan</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/publikasi/seminar*') ? 'active' : '' }}">
                    <a href="/verifikator/publikasi/seminar/{{ $userId }}" class="menu-link">
                        <div data-i18n="Seminar/ Lokakarya">Seminar/ Lokakarya</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('verifikator/publikasi/karya-temuan*') ? 'active' : '' }}">
                    <a href="/verifikator/publikasi/karya-temuan/{{ $userId }}" class="menu-link">
                        <div data-i18n="Karya Temuan">Karya Temuan</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Request::is('verifikator/bahasa*') ? 'active' : '' }}">
            <a href="/verifikator/bahasa/{{ $userId }}" class="menu-link">
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