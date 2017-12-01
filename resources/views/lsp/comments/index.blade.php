@extends('lsp.skeleton')
@section('title')
  Komentar - TeNews
@endsection
@section('content')
  <div class="row row-main">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="row">
          <div class="col s3 m3 l3">
            <nav class="light-blue darken-1 nav-breadcrumb">
              <div class="nav-wrapper">
                <div class="col s12">
                  <a class="breadcrumb">LSP</a>
                  <a class="breadcrumb">Komentar</a>
                </div>
              </div>
            </nav>
          </div>
        </div>
        <div class="row margin-bottom">
          <div class="col s12 m12 l12">
            <h4>Daftar Komentar</h4>
          </div>
        </div>
        <table class="striped centered responsive-table">
          <thead>
            <th>No</th>
            <th>Berita</th>
            <th>Email</th>
            <th>Website</th>
            <th>Komentar</th>
            <th>Status</th>
            <th>Tindakan</th>
          </thead>
          <tbody>
            @foreach ($data as $key => $value)
              @php
              $news = \App\Berita::find($value->komentar_berita_id);
              @endphp
              <tr>
                <td>{{ $key + 1 }}</td>
                <td><a target="_blank" class="black-text" href="{{ url('page/'.$news->berita_link) }}">{{ $news->berita_judul}}</a></td>
                <td><a class="black-text" href="mailto:{{ $value->komentar_email }}">{{ $value->komentar_email}}</a></td>
                <td><a target="_blank" class="black-text" href="{{ $value->komentar_website }}">{{ $value->komentar_website}}</a></td>
                <td>{{ substr($value->komentar_isi, 0, 100) }} ...</td>
                <td>{{ $value->komentar_status }}</td>
                <td>
                  <a href="{{ url('comments/delete/'.$value->komentar_id) }}" class="btn tooltipped waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Komentar"><i class="material-icons">delete</i></a>
                  @if ($value->komentar_status == "Aktif")
                    <a href="{{ url('comments/deactivate/'.$value->komentar_id) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Nonaktifkan Komentar"><i class="material-icons">lock</i></a>
                  @else
                    <a href="{{ url('comments/activate/'.$value->komentar_id) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Aktifkan Komentar"><i class="material-icons">lock_open</i></a>
                  @endif
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="row margin-bottom">
          <div class="col s12 m12 l12">
            <div class="right">
              {{ $data->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
