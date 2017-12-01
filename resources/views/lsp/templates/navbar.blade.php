<div class="navbar-fixed">
  <nav class="light-blue darken-1">
  <div class="nav-wrapper container">
    <a href="{{ url('/') }}" class="brand-logo"><i class="material-icons">local_library</i>TeNews</a>
    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
       @if (Auth::check())
         <li class="waves-effect waves-light"><a href="{{ url('news') }}" class="main-nav">Berita</a></li>
         <li class="waves-effect waves-light"><a href="{{ url('logout') }}" class="main-nav">Keluar</a></li>
       @else
         <li class="waves-effect waves-light"><a href="{{ url('login') }}" class="main-nav">Login</a></li>
         <li class="waves-effect waves-light"><a href="{{ url('register') }}" class="main-nav">Register</a></li>
       @endif
     </ul>
  </div>
</nav>
</div>

{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Berita</title>
  </head>
  <body>
    <br>
    @yield('content')
  </body>
</html> --}}
