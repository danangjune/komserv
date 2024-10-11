@extends('layouts.app')

@section('content')
<!-- Content -->

<div class="container-xxl py-4">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                      <path
                        opacity="0.06"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                        fill="#161616" />
                      <path
                        opacity="0.06"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                        fill="#161616" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                    </svg>
                  </span>
                  <span class="app-brand-text demo text-body fw-bold ms-1">KominfoServ</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 pt-2">Selamat datang di Layanan Diskominfo! 👋</h4>
              <p class="mb-4">Silahkan login ke akun anda untuk memulai..</p>

              <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
              @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">{{ __('Email Address') }}</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">{{ __('Password') }}</label>
                    <a href="">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Ingat saya </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>Belum memiliki akun?</span>
                <a href="{{ route('register') }}">
                  <span>Buat akun kamu disini</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="vuexy/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="vuexy/assets/vendor/libs/popper/popper.js"></script>
    <script src="vuexy/assets/vendor/js/bootstrap.js"></script>
    <script src="vuexy/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vuexy/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="vuexy/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="vuexy/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="vuexy/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="vuexy/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="vuexy/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="vuexy/assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="vuexy/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="vuexy/assets/js/pages-auth.js"></script>
@endsection
