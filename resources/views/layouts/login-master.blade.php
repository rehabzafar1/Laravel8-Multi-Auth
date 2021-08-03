<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <base href="{{ asset('admin_panel/') }}" >
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('admin_panel/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/font/simple-line-icons/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap-float-label.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/main.css') }}" />
</head>
<body class="background show-spinner no-footer">
<div class="fixed-background"></div>
@yield('content')
<script src="{{ asset('admin_panel/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin_panel/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_panel/js/dore.script.js') }}"></script>
<script src="{{ asset('admin_panel/js/scripts.js') }}"></script>
<script src="{{ asset('admin_panel/js/bootstrap-notify.js') }}"></script>
<script src="{{ asset('admin_panel/js/demo.js') }}"></script>
@include('includes.notifications')
@stack('scripts')
</body>
</html>
