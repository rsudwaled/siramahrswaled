<!doctype html>
<html class="no-js" lang="id-ID">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="SIRAMAH-RS Waled adalah aplikasi layanan web service untuk memudahkan informasi bagi pasien dan pendaftaran antrian melalui online">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="RSUD Waled, RS Waled, Daftar RS, Daftar RSUD Waled, Daftar Online">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('rsudwaled/rswaledico.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('docmed/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('docmed/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('docmed/css/responsive.css') }}"> --}}
    @yield('css')
</head>

<body>
    @include('vendor.docmed.header')

    @yield('content')

    @include('vendor.docmed.footer')

    @yield('js')
    <!-- JS here -->
    <script src="{{ asset('docmed/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('docmed/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('loading-overlay/loadingoverlay.min.js') }}"></script>
    <script src="{{ asset('docmed/js/popper.min.js') }}"></script>
    <script src="{{ asset('docmed/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('docmed/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('docmed/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('docmed/js/ajax-form.js') }}"></script>
    <script src="{{ asset('docmed/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('docmed/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('docmed/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('docmed/js/scrollIt.js') }}"></script>
    <script src="{{ asset('docmed/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('docmed/js/wow.min.js') }}"></script>
    <script src="{{ asset('docmed/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('docmed/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('docmed/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('docmed/js/plugins.js') }}"></script>
    <script src="{{ asset('docmed/js/gijgo.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('docmed/js/contact.js') }}"></script>
    <script src="{{ asset('docmed/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('docmed/js/jquery.form.js') }}"></script>
    <script src="{{ asset('docmed/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('docmed/js/mail-script.js') }}"></script>
    @include('sweetalert::alert')

    <script src="{{ asset('docmed/js/main.js') }}"></script>
    <script>
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            format: "yyyy-mm-dd",
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('.datepicker2').datepicker({
            format: "yyyy-mm-dd",
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
        $(".preloader").click(function() {
            $.LoadingOverlay("show");
        });
        // $(document).ready(function() {
        //     $('.js-example-basic-multiple').select2();
        // });
    </script>
</body>

</html>
