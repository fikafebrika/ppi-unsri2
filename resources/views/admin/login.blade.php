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
        <title>Login | Prodi PPI UNSRI</title>
        <meta name="description" content="Login" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/unsri.png')}}" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/boxicons.css')}}" />
        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="{{asset('admin/assets/vendor/css/core.css')}}"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="{{asset('admin/assets/vendor/css/theme-default.css')}}"
            class="template-customizer-theme-css"
        />
        <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />
        <!-- Vendors CSS -->
        <link
            rel="stylesheet"
            href="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"
        />
        <!-- Page CSS -->
        <!-- Page -->
        <link
            rel="stylesheet"
            href="{{asset('admin/assets/vendor/css/pages/page-auth.css')}}"
        />
        <!-- Helpers -->
        <script src="{{asset('admin/assets/vendor/js/helpers.js')}}"></script>
        <script src="{{asset('admin/assets/js/config.js')}}"></script>
    </head>
    <body>
        <!-- Content -->
        <div class="container-xxl">
            <div
                class="authentication-wrapper authentication-basic container-p-y"
            >
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="app-brand justify-content-center mb-4">
                                <a
                                    href="index.html"
                                    class="app-brand-link gap-2"
                                >
                                    <span class="app-brand-logo demo">
                                        <img
                                            src="{{asset('admin/assets/img/unsri.png') }}"
                                            alt=""
                                            width="100"
                                        />
                                    </span>
                                    <span
                                        class="app-brand-text text-body fw-bolder fs-3"
                                        >PPI UNSRI</span
                                    >
                                </a>
                            </div>
                            <!-- /Logo -->
                            <h4 class="mb-2">Program Profesi Insinyur UNSRI</h4>
                            <p>Silakan Login</p>

                            <form
                                id="formAuthentication"
                                class="mb-3"
                                action="/admin/beranda"
                                method=""
                            >
                                <div class="mb-3">
                                    <label for="email" class="form-label"
                                        >Email Prodi PPI UNSRI</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email-username"
                                        placeholder="Masukkan Email Prodi PPI UNSRI"
                                        autofocus
                                    />
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password"
                                            >Password</label
                                        >
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control"
                                            name="password"
                                            placeholder="Masukkan Password"
                                            aria-describedby="password"
                                        />
                                        <span
                                            class="input-group-text cursor-pointer"
                                            ><i class="bx bx-hide"></i
                                        ></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="remember-me"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="remember-me"
                                        >
                                            Ingat Saya
                                        </label>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-primary d-grid w-100"
                                    type="submit"
                                >
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /Register -->
                </div>
            </div>
        </div>
        <!-- / Content -->
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{asset('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/js/bootstrap.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/js/menu.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('admin/assets/js/main.js')}}"></script>
    </body>
</html>
