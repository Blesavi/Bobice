<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('bo/favicon.ico') }}" type="image/x-icon"/>

    <title>Goji Berry BO</title>

    <link href="{{ asset('bo/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bo/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('bo/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('bo/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('bo/css/custom.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="gray-dark-bg">
@yield('content')

<!-- Mainly scripts -->
<script src="{{ asset('bo/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('bo/js/bootstrap.min.js') }}"></script>

</body>

</html>
