@extends('lsp.skeleton')
@section('title')
  Kategori - TeNews
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
                  <a class="breadcrumb">Kategori</a>
                </div>
              </div>
            </nav>
          </div>
          <div class="col s9 m9 l9">
            <div class="row right">
              <div class="col s12 m12 l12">
                <a href="{{ url('categories/create') }}" class="btn modal-trigger tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Tambah Kategori"><i class="material-icons">add_circle</i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row margin-bottom">
          <div class="col s12 m12 l12">
            <h4>Daftar Kategori</h4>
          </div>
        </div>
        <table class="striped centered responsive-table">
          <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Tanggal Input</th>
            <th>Penulis</th>
            <th>Tindakan</th>
          </thead>
          <tbody>
            @foreach ($data as $key => $value)
              @php
                $user = \App\User::find($value->kategori_userinput);
              @endphp
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->kategori_nama }}</td>
                <td>{{ $value->kategori_status}}</td>
                <td>{{ $value->kategori_tglinput }}</td>
                <td>{{ $user->user_namalengkap }}</td>
                <td>
                  <a href="{{ url('categories/edit/'.$value->kategori_id) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Ubah Kategori"><i class="material-icons">edit</i></a>
                  <a href="{{ url('categories/delete/'.$value->kategori_id) }}" class="btn tooltipped waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Kategori"><i class="material-icons">delete</i></a>
                  @if ($value->kategori_status == "Aktif")
                    <a href="{{ url('categories/deactivate/'.$value->kategori_id) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Nonaktifkan Kategori"><i class="material-icons">lock</i></a>
                  @else
                    <a href="{{ url('categories/activate/'.$value->kategori_id) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Aktifkan Kategori"><i class="material-icons">lock_open</i></a>
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
