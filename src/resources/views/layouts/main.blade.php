<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.header')
<body>
<div class="container">
    @include('partials.menu-bar')
    @yield('content')
</div>
</body>
@include('partials.footer')
