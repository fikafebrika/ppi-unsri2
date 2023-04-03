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
    <title>@yield('pageHeading') {{ '| PPI UNSRI'}}</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('mahasiswa/assets/img/unsri.png')}}" />
    {{-- include styles --}}
    @include('mahasiswa.partials.styles')
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
          <div class="app-brand demo">
            <a href="/akun" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{asset('mahasiswa/assets/img/unsri.png')}}" alt="" width="55" />
              </span>
              <span class="app-brand-text menu-text fw-bolder ms-2 fs-3"
                >PPI UNSRI</span
              >
            </a>
            <a
              href="javascript:void(0);"
              class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"
            >
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>
          <div class="menu-inner-shadow"></div>

          @yield('sidebar')

        </aside>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          @include('mahasiswa.partials.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                @include('mahasiswa.partials.header')

                <div class="row">
                    <div class="col-md-12">

                        @yield('content')

                    </div>
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('mahasiswa.partials.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
          {{-- <div class="buy-now">
            <a href="#" class="btn btn-success btn-buy-now"
              >Sinkronisasi Data</a
            >
          </div> --}}
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    {{-- include scripts --}}
    @include('mahasiswa.partials.scripts')
  </body>
</html>
