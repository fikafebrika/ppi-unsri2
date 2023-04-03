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
    <title>@yield('pageHeading') {{ '| Verifikator PPI UNSRI'}}</title>
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
            @yield('sidebar')
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

              @include('verifikator.partials.header')

              <div class="row">
                <div class="col-md-12">

                    @yield('content')

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
