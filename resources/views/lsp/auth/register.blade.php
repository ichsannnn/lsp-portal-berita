<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TeNews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/materialize.min.css') }}" media="screen" title="Materialize CSS" charset="utf-8">
    <link href="{{ url('assets/css/product-sans.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/icon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/login.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/puin.ico') }}">
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/materialize.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.button-collapse').sideNav();
      });
    </script>
  </head>
  <body class="grey lighten-4">
  <div class="navbar-fixed">
    <nav class="light-blue darken-1">
      <div class="nav-wrapper container">
        <a href="{{ url('/') }}" class="brand-logo"><i class="material-icons">local_library</i>TeNews</a>
      </div>
    </nav>
  </div>
  <div class="login-container">
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="card-panel">
          <form action="{{ url('register') }}" method="post">
            {{ csrf_field() }}
            <div class="row margin-bottom center">
              <div class="col s12 m12 l12">
                <div class="light-blue darken-1 center login-circle">
                  <i class="material-icons md-120 white-text">local_library</i>
                </div>
              </div>
            </div>
            <div class="row margin-bottom">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">account_circle</i>
                <input id="nama" type="text" name="nama" class="validate" required>
                <label for="nama">Nama Lengkap</label>
              </div>
            </div>
            <div class="row margin-bottom">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">account_box</i>
                <input id="username" type="text" name="user_name" class="validate" required>
                <label for="username">Username</label>
              </div>
            </div>
            <div class="row margin-bottom">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">email</i>
                <input id="email" type="text" name="user_email" class="validate" required>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row margin-bottom">
              <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" name="password" class="validate" required>
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12 l12">
                <button type="submit" class="btn btn-full light-blue darken-1 waves-effect waves-block waves-light">Register</button>
              </div>
            </div>
            @if (count($errors) > 0)
              <div class="row margin-bottom">
                <div class="col s12 m12 l12">
                  <div class="card-panel red darken-1 white-text">
                    @foreach ($errors->all() as $value)
                        {{ $value }}<br>
                    @endforeach
                  </div>
                </div>
              </div>
            @endif
            @if(session('message'))
            <div class="row margin-bottom">
              <div class="col s12 m12 l12">
                <div class="card-panel light-blue darken-1 white-text">
                  {{ session('message') }}
                </div>
              </div>
            </div>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
