@extends('lsp.skeleton')
@section('title')
  Pengguna - TeNews
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
                  <a class="breadcrumb">Pengguna</a>
                </div>
              </div>
            </nav>
          </div>
          <div class="col s9 m9 l9">
            <div class="row right">
              <div class="col s12 m12 l12">
                <a href="{{ url('users/create') }}" class="btn modal-trigger tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Tambah Pengguna"><i class="material-icons">add_circle</i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row margin-bottom">
          <div class="col s12 m12 l12">
            <h4>Daftar Pengguna</h4>
          </div>
        </div>
        <table class="striped centered responsive-table">
          <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Status</th>
            <th>Tindakan</th>
          </thead>
          <tbody>
            @foreach ($data as $key => $value)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->user_namalengkap }}</td>
                <td>{{ $value->user_name }}</td>
                <td>{{ $value->user_email }}</td>
                <td>{{ $value->user_status }}</td>
                <td>
                  <a href="{{ url('users/edit/'.$value->user_name) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Ubah Pengguna"><i class="material-icons">edit</i></a>
                  <a href="{{ url('users/delete/'.$value->user_name) }}" class="btn tooltipped waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Pengguna"><i class="material-icons">delete</i></a>
                  @if ($value->user_status == 'Tidak Aktif')
                    <a href="{{ url('users/activate/'.$value->user_name) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Aktikan Pengguna"><i class="material-icons">lock_open</i></a>
                  @else
                    <a href="{{ url('users/deactivate/'.$value->user_name) }}" class="btn tooltipped waves-effect waves-light light-blue darken-1" data-position="top" data-delay="50" data-tooltip="Nonaktikan Pengguna"><i class="material-icons">lock</i></a>
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
