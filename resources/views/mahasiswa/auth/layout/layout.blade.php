<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
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

    <title>@yield('pageHeading') {{ '| Mahasiswa PPI UNSRI'}}</title>

    @yield('meta')

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('mahasiswa/assets/img/unsri.png')}}" />

    {{-- include styles --}}
    @include('mahasiswa.auth.layout.styles')

  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">

            @yield('content')

          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    {{-- include scripts --}}
    @include('mahasiswa.auth.layout.scripts')

  </body>
</html>
