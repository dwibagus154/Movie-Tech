<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('auth/public/img/favicon.ico') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('auth/public/graindashboard/css/graindashboard.css') }}">
</head>

@yield('content')

<script src="{{ asset('auth/public/graindashboard/js/graindashboard.js') }}"></script>
<script src="{{ asset('auth/public/graindashboard/js/graindashboard.vendor.js') }}"></script>
</body>

</html>