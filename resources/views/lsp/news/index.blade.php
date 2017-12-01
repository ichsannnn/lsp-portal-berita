@extends('lsp.skeleton')
@section('title')
  Berita - TeNews
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
                  <a href="#" class="breadcrumb">LSP</a>
                  <a href="#" class="breadcrumb">Berita</a>
                </div>
              </div>
            </nav>
          </div>
          <div class="col s9 m9 l9">
            <div class="row right">
              <div class="col s12 m12 l12">
                <a href="{{ url('news/create') }}" class="btn modal-trigger tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Tambah Berita"><i class="material-icons">add_circle</i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row margin-bottom">
          <div class="col s12 m12 l12">
            <h4>Daftar Berita</h4>
          </div>
        </div>
        <table class="striped centered responsive-table">
          <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal Input</th>
            <th>Pengunjung</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Tindakan</th>
          </thead>
          <tbody>
            @foreach ($data as $key => $value)
              @php
              $user = \App\User::find($value->berita_userinput);
              $cat = \App\Kategori::find($value->berita_kategori_id);
              @endphp
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->berita_judul }}</td>
                <td>{{ substr($value->berita_detail, 0, 100)}} ...</td>
                <td>{{ $value->berita_tglinput }}</td>
                <td>{{ $value->berita_view }}</td>
                <td>{{ $cat->kategori_nama }}</td>
                <td>{{ $user->user_namalengkap }}</td>
                <td>
                  <a href="{{ url('news/edit/'.$value->berita_id) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Ubah Berita"><i class="material-icons">edit</i></a>
                  <a href="{{ url('news/delete/'.$value->berita_id) }}" class="btn tooltipped waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Berita"><i class="material-icons">delete</i></a>
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
