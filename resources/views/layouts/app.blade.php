<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body id="app-container" class="menu-default show-spinner">
@include('includes.header')
@include('includes.sidebar')
@yield('content')
@include('includes.footer')
<div id="overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>
@include('includes.scripts')
@stack('scripts')
</body>
</html>



