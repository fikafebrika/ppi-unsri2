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
    <form action="/verifikator/logout" method="post">
        @csrf
        <button type="submit" class="dropdown-item mx-2">
            <i class="bx bx-power-off me-2"></i>
            <span class="align-middle">Logout</span>
        </button>
    </form>
</li>