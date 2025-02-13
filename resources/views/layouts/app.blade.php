<!doctype html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="vuexy/assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta name="description" content="" /> -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="vuexy/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="vuexy/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="vuexy/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="vuexy/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="vuexy/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="vuexy/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="vuexy/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="vuexy/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="vuexy/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="vuexy/assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="vuexy/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="vuexy/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="vuexy/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="vuexy/assets/js/config.js"></script>
  </head>

  <body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>