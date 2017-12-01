@extends('lsp.skeleton')
@section('title')
  Pengguna - TeNews
@endsection
@section('content')
  <div class="row row-main">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="row">
          <div class="col s5 m5 l5">
            <nav class="light-blue darken-1 nav-breadcrumb">
              <div class="nav-wrapper">
                <div class="col s12">
                  <a class="breadcrumb">LSP</a>
                  <a class="breadcrumb">Pengguna</a>
                  <a class="breadcrumb">Tambah</a>
                </div>
              </div>
            </nav>
          </div>
        </div>

        <div class="row margin-bottom">
          <div class="col s12 m12 l12">
            <h4>Tambah Pengguna</h4>
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
        <div class="row">
          <form action="{{ url('users/create') }}" method="post">
            <div class="row margin-bottom">
              {!! csrf_field() !!}
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <input id="nama" type="text" name="nama" class="validate" required value="{{ old('nama') }}">
                  <label for="nama">Nama Lengkap</label>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <input id="username" type="text" name="user_name" class="validate" required value="{{ old('user_name') }}">
                  <label for="username">Username</label>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <input id="email" type="email" name="user_email" class="validate" required value="{{ old('user_email') }}">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <input id="password" type="password" name="password" class="validate" required>
                  <label for="password">Password</label>
                </div>
              </div>
                <div class="row margin-bottom">
                  <div class="input-field col s12 m12 l12">
                    <label>Status: </label>
                  </div>
                </div>
                <div class="row margin-bottom">
                  <div class="input-field col s12 m12 l12">
                    <p>
                      <input type="radio" id="status1" name="status" value="1" class="with-gap" checked>
                      <label for="status1">Aktif</label>
                    </p>
                    <p>
                      <input type="radio" id="status2" name="status" value="2" class="with-gap" >
                      <label for="status2">Tidak Aktif</label>
                    </p>
                  </div>
                </div>
            </div>
            <div class="row margin-bottom right">
              <div class="input-field col s12">
                <button type="submit" class="btn waves-effect waves-light light-blue darken-1">Simpan</button>
                <a href="{{ url('categories') }}" class="btn waves-effect waves-light grey lighten-1">Kembali</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
