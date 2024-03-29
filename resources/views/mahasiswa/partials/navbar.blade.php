<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div
      class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
    >
      <a
        class="nav-item nav-link px-0 me-xl-4"
        href="javascript:void(0)"
      >
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>
    <div
      class="navbar-nav-right d-flex align-items-center"
      id="navbar-collapse"
    >
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- User -->
        <li
          class="nav-item navbar-dropdown dropdown-user dropdown mt-2"
        >
          <a
            class="d-flex nav-link dropdown-toggle hide-arrow"
            href="javascript:void(0);"
            data-bs-toggle="dropdown"
          >
            <div class="avatar">
                {{-- Pasfoto Terbaru 3x4 cm pas Register --}}
              <img
                src="{{ asset('storage/' . auth()->user()->image) }}"
                alt
                class="w-px-40 h-px-40 rounded-circle"
              />
            </div>
            <div class="nav-item ms-2 mt-2">
              <p>{{ auth()->user()->name }}</p>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="/profil">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-4">
                    <div class="avatar">
                      <img
                        src="{{ asset('storage/' . auth()->user()->image) }}"
                        alt
                        class="w-px-50 h-px-50 rounded-circle"
                      />
                    </div>
                  </div>
                  <div class="flex-grow-1 mt-1">
                    <span class="fw-semibold d-block"
                      >{{ auth()->user()->name }}</span
                    >
                    <small class="text-muted"
                      >{{ auth()->user()->email }}</small
                    >
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="/beranda">
                <i class="bx bx-home-circle me-2"></i>
                <span class="align-middle">Beranda</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/profil">
                <i class="bx bx-layout me-2"></i>
                <span class="align-middle">Klaim Pencapaian</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/rekognisi-pencapaian">
                  <i class="bx bx-dock-top me-2"></i>
                  <span class="align-middle"
                    >Rekognisi Pencapaian</span
                  >
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/kartu-hasil-studi">
                  <i class="bx bx-file me-2"></i>
                  <span class="align-middle"
                    >Kartu Hasil Studi</span
                  >
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Logout</span>
                    </button>
                </form>
            </li>
            {{-- <li>
              <a class="dropdown-item" href="/">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Logout</span>
              </a>
            </li> --}}
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
  </nav>
