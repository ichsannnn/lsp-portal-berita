@extends('lsp.dashboard-skeleton')
@section('title')
  {{ $data->berita_judul }}
@endsection
@section('content')
  <div class="row row-main">
    <div class="col s3 m3 l3">
      <div class="row-widget">
        <div class="card">
          <div class="card-content">
            <i class="material-icons title">favorite</i> <span class="card-title">Berita Terpopuler</span>
            <hr>
            @foreach ($populer as $key => $value)
              <li class="waves-effect waves-block">
                {{ $key + 1 }}. <a href="{{ url('page/'.$value->berita_link) }}">{{ $value->berita_judul }}</a>
              </li>
              <p>
              </p>
            @endforeach
          </div>
        </div>
      </div>
      <div class="row-widget">
        <div class="card">
          <div class="card-content">
            <i class="material-icons title">stars</i> <span class="card-title">Berita Terbaru</span>
            <hr>
            @foreach ($baru as $key => $value)
              <li class="waves-effect waves-block">
                {{ $key + 1 }}. <a href="{{ url('page/'.$value->berita_link) }}">{{ $value->berita_judul }}</a>
              </li>
              <p>
              </p>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="col s9 m9 l9">
      <div class="row-widget">
        <div class="card">
          <div class="card-content">
            <a href="{{ url('page/'.$data->berita_link) }}"><span class="card-title">{{ $data->berita_judul }}</span></a>
            <p>{{ $data->berita_detail }}</p>
          </div>
          <div class="card-action">
            @php
            $user = \App\User::find($data->berita_userinput);
            @endphp
            <i class="material-icons inline-middle">account_circle</i> <span class="inline-middle">{{ $user->user_namalengkap }}</span>
            <div class="right">
              <i class="material-icons inline-middle">date_range</i> <span class="inline-middle">{{ $data->berita_tglinput }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row-widget">
        <div class="card">
          <div class="card-content">
            <i class="material-icons title">comment</i> <span class="card-title">Komentar</span>
            <form action="{{ url('comments/create') }}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="berita_id" value="{{ $data->berita_id }}">
              <input type="hidden" name="berita_slug" value="{{ $data->berita_link }}">
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <input id="email" type="email" name="email" class="validate" required>
                  <label for="email" data-error="Format email salah">Email</label>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <input id="website" type="url" name="website" class="validate">
                  <label for="website" data-error="Format website salah">Website (dengan http)</label>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12">
                  <textarea id="isi" name="isi" rows="8" cols="80" class="materialize-textarea"></textarea>
                  <label for="isi">Komentar</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l12">
                  <button type="submit" class="btn btn-full light-blue darken-1 waves-effect waves-block waves-light">Kirim</button>
                </div>
              </div>
            </form>

            @foreach ($komentar as $key => $value)
              <hr>
              <p>
                <i class="material-icons title">email</i> <span class="card-title"> {{ $value->komentar_email }}</span>
              </p>
              <p>
                <i class="material-icons title">language</i> <span class="card-title"><a class="black-text" href="{{ $value->komentar_website }}" target="_blank">{{ $value->komentar_website }}</a></span>
              </p>
              <blockquote>
                {{ $value->komentar_isi }}
              </blockquote>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
