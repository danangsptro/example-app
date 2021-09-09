<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/img/company.png') }}">
    <title>{{ $title ?? config('app.name') }} - Admin</title>
    {{-- Custom font for this template --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.css') }}">

    {{-- Custom style for this template --}}
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.css') }}">
</head>

<body style="background-color: #e2e8f0;">

    @yield('content')

    {{-- Bootstrap Core JavaScript --}}
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

    {{-- Core Plugin JavaScript --}}
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.js') }}"></script>

    {{-- Custom Scripts for all pages --}}
    <script src="{{ asset('assets/js/sb-admin-2.js') }}"></script>
</body>

</html>
