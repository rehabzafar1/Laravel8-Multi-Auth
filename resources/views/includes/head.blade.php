<head>
    <meta charset="UTF-8" />
    <base href="{{ asset('admin_panel/') }}" >
    <title>@yield('title','')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('admin_panel/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/font/simple-line-icons/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/fullcalendar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap-float-label.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/dropzone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/bootstrap-stars.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/quill.snow.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/cropper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/vendor/smart_wizard.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_panel/css/custom.css') }}" />
    @stack('styles')
</head>
