<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>Goji Berry BO</title>

    <link href="{{ asset('bo/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bo/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('bo/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('bo/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('bo/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('bo/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('bo/css/plugins/switchery/switchery.css') }}" rel="stylesheet">
    <link href="{{ asset("bo/js/milos/fancybox/source/jquery.fancybox.css") }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('bo/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <link href="{{ asset('bo/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <!-- Mainly scripts -->

    <script src="{{ asset('bo/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bo/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bo/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('bo/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>


    <!-- Flot -->
    <script src="{{ asset('bo/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('bo/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('bo/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('bo/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('bo/js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('bo/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('bo/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('bo/js/inspinia.js') }}"></script>
    <script src="{{ asset('bo/js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('bo/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- GITTER -->
    <script src="{{ asset('bo/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('bo/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('bo/js/demo/sparkline-demo.js') }}"></script>

    <!-- ChartJS-->
    <script src="{{ asset('bo/js/plugins/chartJs/Chart.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('bo/js/plugins/toastr/toastr.min.js') }}"></script>

    <!-- Add fancyBox -->
    <script src="{{ asset("bo/js/milos/fancybox/source/jquery.fancybox.pack.js") }}"></script>

    <!-- Add switchery -->
    <script src="{{ asset('bo/js/plugins/switchery/switchery.js') }}"></script>

    <!-- Add chosen -->
    <script src="{{ asset('bo/js/plugins/chosen/chosen.jquery.js') }}"></script>

    <!-- Add datepicker -->
    <script src="{{ asset('bo/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- Add sweetalert -->
    <script src="{{ asset('bo/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Tags Input -->
    <script src="{{ asset('bo/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script>
        setCookie('isBack','0',1);
        setCookie('navigationPageOpen','0',1);

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
    </script>

</head>
<body>

<!-- Wrapper-->
<div id="wrapper">
    <!-- Navigation -->
    @include('bo.layout.navigation')
    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">
    <!-- Page wrapper -->
    @include('bo.layout.topnavbar')
    <!-- Main view  -->
    @yield('content')
    <!-- Footer -->
    @include('bo.layout.footer')
    </div>
    <!-- End page wrapper-->
</div>
<!-- End wrapper-->

@yield('scripts')
@yield('scriptsNavBar')

</body>
</html>