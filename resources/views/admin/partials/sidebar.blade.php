<li class="menu-item {{ Request::is('admin/beranda*') ? 'active' : '' }}">
    <a href="/admin/beranda" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Beranda">Beranda</div>
    </a>
</li>
<li class="menu-item {{ Request::is('admin/verifikator*') ? 'active' : '' }}">
    <a href="/admin/verifikator" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Daftar Verifikator">Daftar Verifikator</div>
    </a>
</li>
<li class="menu-item {{ Request::is('admin/logout*') ? 'active' : '' }}">
    <form action="/admin/logout" method="POST">
        @csrf
        <button class="border-0 menu-link btn btn-outline-light">
            <i class="menu-icon tf-icons bx bx-power-off"></i>
            <div data-i18n="Logout">Logout</div>
        </button>
    </form>
    {{-- <a href="/admin/logout" class="menu-link">
        <i class="menu-icon tf-icons bx bx-power-off"></i>
        <div data-i18n="Logout">Logout</div>
    </a> --}}
</li>