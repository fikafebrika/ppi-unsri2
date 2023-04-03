<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Akun | Dosen PPI UNSRI</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('verifikator/assets/img/unsri.png')}}" />
    {{-- include styles --}}
    @include('verifikator.partials.styles')
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside
          id="layout-menu"
          class="layout-menu menu-vertical menu bg-menu-theme"
        >
          <ul class="menu-inner py-1">
            <a href="/verifikator/akun" class="text-center mx-auto mt-3 mb-2">
                <img
                  src="{{asset('verifikator/assets/img/avatars/1.png')}}"
                  alt=""
                  width="100"
                  class="rounded-circle mb-3"
                />
                <h6 class="fw-bolder mb-1 pb-0">Dedy Kurniawan, M.Sc.</h6>
                <p class="text-secondary">Dosen Verifikator</p>
              </a>
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="/verifikator/beranda" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Beranda">Beranda</div>
              </a>
            </li>
            <li class="menu-item active">
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
          </ul>
        </aside>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          @include('verifikator.partials.navbar')
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Akun Anda</h5>
                    <div class="card-body pb-3">
                      <form
                        id="formAccountSettings"
                        method="POST"
                        onsubmit="return false"
                      >
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="nip" class="form-label"
                              >Nomor Induk Pegawai</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="nip"
                              name="nip"
                              value="199008022019031006"
                              disabled
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="nama-lengkap" class="form-label"
                              >Nama Lengkap</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="nama-lengkap"
                              name="nama-lengkap"
                              value="Dedy Kurniawan, M.Sc."
                              disabled
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              name="email"
                              value="dedy@unsri.ac.id"
                              disabled
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="posisi" class="form-label"
                              >Posisi</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="posisi"
                              name="posisi"
                              value="Dosen Verifikator"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="mt-3 mb-1">
                          <a
                            href="index.html"
                            class="btn btn-secondary me-2 text-white"
                            >Kembali</a
                          >
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <h5 class="card-header">Ubah Password</h5>
                    <div class="card-body pb-3">
                      <form
                        id="formAccountSettings"
                        method="POST"
                        onsubmit="return false"
                      >
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="password-baru" class="form-label"
                              >Password Baru</label
                            >
                            <input
                              type="password"
                              class="form-control"
                              id="password-baru"
                              name="password-baru"
                              placeholder="Password Baru"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="password-lama" class="form-label"
                              >Password Lama</label
                            >
                            <input
                              type="password"
                              class="form-control"
                              id="password-lama"
                              name="password-lama"
                              placeholder="Password Lama"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="konfirmasi-password" class="form-label"
                              >Konfirmasi Password Baru</label
                            >
                            <input
                              type="password"
                              class="form-control"
                              id="konfirmasi-password"
                              name="konfirmasi-password"
                              placeholder="Konfirmasi Password Baru"
                            />
                          </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between">
                          <div class="me-2">
                            <a href="index.html" class="btn btn-secondary"
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
                              href="login.html"
                              class="btn btn-primary text-white"
                              >Simpan</a
                            >
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
            <!-- Footer -->
            @include('verifikator.partials.footer')
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    {{-- include scripts --}}
    @include('verifikator.partials.scripts')
  </body>
</html>
