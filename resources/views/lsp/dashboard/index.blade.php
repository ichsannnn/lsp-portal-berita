@extends('lsp.dashboard-skeleton')
@section('title')
  Berita Utama
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
      @foreach ($utama as $key => $value)
        @php
        $user = \App\User::find($value->berita_userinput);
        @endphp
        <div class="card">
          <div class="card-content">
            <a href="{{ url('page/'.$value->berita_link) }}"><span class="card-title">{{ $value->berita_judul }}</span></a>
            <p>{{ substr($value->berita_detail, 0, 255) }}...</p>
            <a href="{{ url('page/'.$value->berita_link) }}">lanjutkan</a>
          </div>
          <div class="card-action">
            <i class="material-icons inline-middle">account_circle</i> <span class="inline-middle">{{ $user->user_namalengkap }}</span>
            <div class="right">
              <i class="material-icons inline-middle">date_range</i> <span class="inline-middle">{{ $value->berita_tglinput }}</span>
            </div>
          </div>
        </div>
      @endforeach
      <div class="row margin-bottom">
        <div class="col s12 m12 l12">
          <div class="right">
            {{ $utama->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
