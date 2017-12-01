<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/materialize.min.css') }}" media="screen" title="Materialize CSS" charset="utf-8">
    <link href="{{ url('assets/css/product-sans.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/icon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/custom-style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/materialize.min.js') }}"></script>
    <script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ url('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ url('assets/js/init.js') }}"></script>
  </head>
  <body class="grey lighten-4">
    @include('lsp.templates.navbar')
    @include('lsp.templates.sidenav')
  <main>
    @yield('content')
  </main>
  </body>
</html>



{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Berita</title>
  </head>
  <body>
    @if (Auth::check())
      <a href="{{ url('/') }}">Beranda</a>
      <a href="{{ url('categories') }}">Kategori</a>
      <a href="{{ url('news') }}">Berita</a>
      <a href="{{ url('comments') }}">Komentar</a>
      <a href="{{ url('users') }}">User</a>
      <a href="{{ url('logout') }}">Logout</a>
    @else
      <a href="{{ url('register') }}">Register</a>
      <a href="{{ url('login') }}">Login</a>
    @endif
    <br>
    @yield('content')
  </body>
</html> --}}
