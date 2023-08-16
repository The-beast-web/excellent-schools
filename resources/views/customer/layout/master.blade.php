<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online School - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets2/images/favicon.png') }}">

    <!-- CSS
 ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets2/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/magnify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
</head>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    @include('customer.layout.header')
    <!-- End Header Area -->

    <!-- Mobile Menu Section -->
    @include('customer.layout.mobile')

    <!-- Start Side Vav -->
    @include('customer.layout.sidecart')
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Content -->
    @yield('content')
    <!-- End Content -->
@include('customer.layout.newsletter')
    <!-- Start Footer aera -->
    @include('customer.layout.footer')
    <!-- End Footer aera -->

    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets2/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets2/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets2/js/vendor/bootstrap.min.js') }}"></script>
    <!-- sal.js -->
    <script src="{{ asset('assets2/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/swiper.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/magnify.min.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/odometer.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/backtotop.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/isotop.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/imageloaded.js') }}"></script>

    <script src="{{ asset('assets2/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/jquery-one-page-nav.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/magnify-popup.min.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/paralax-scroll.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/paralax.min.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('assets2/js/vendor/plyr.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets2/js/main.js') }}"></script>
    <script src="{{ asset('assets2/js/script.js') }}"></script>
</body>

</html>
