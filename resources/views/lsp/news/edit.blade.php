@extends('lsp.skeleton')
@section('title')
  Berita - TeNews
@endsection
@section('content')
  <div class="row row-main">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="row">
          <div class="col s12 m4 l4">
            <nav class="light-blue darken-1 nav-breadcrumb">
              <div class="nav-wrapper">
                <div class="col s12">
                  <a class="breadcrumb">LSP</a>
                  <a class="breadcrumb">Berita</a>
                  <a class="breadcrumb">Ubah</a>
                </div>
              </div>
            </nav>
          </div>
        </div>

        <div class="row margin-bottom">
          <div class="col s12 m12 l12">
            <h4>Ubah Berita</h4>
          </div>
        </div>
        <div class="row">
          <form action="{{ url('news/edit') }}" method="post">
            <div class="row margin-bottom">
              {!! csrf_field() !!}
              <input type="hidden" name="id" value="{{ $berita->berita_id }}">
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <select class="js-select-format" name="kategori" style="width:100%">
                    <option selected disabled>Pilih Kategori</option>
                    @foreach ($kategori as $value)
                      <option value="{{ $value->kategori_id }}" @if ($value->kategori_id == $berita->berita_kategori_id) selected @endif >{{ $value->kategori_nama }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12 m12 l12">
                  <input type="text" id="judul" name="judul" autocomplete="off" value="{{ $berita->berita_judul }}">
                  <label for="judul">Judul Berita</label>
                </div>
              </div>
              <div class="row margin-bottom">
                <div class="input-field col s12">
                  <textarea id="detail" name="detail" rows="8" cols="80" class="materialize-textarea">{{ $berita->berita_detail }}</textarea>
                  <label for="detail">Isi Berita</label>
                </div>
              </div>
              <div class="col s12 m12 l12">
                <div class="col s2 m2 l2">
                  <div class="row margin-bottom">
                    <div class="input-field col s12 m12 l12">
                      <label>Berita Utama? </label>
                    </div>
                  </div>
                  <div class="row margin-bottom">
                    <div class="input-field col s12 m12 l12">
                      <p>
                        <input type="radio" id="utama1" name="utama" value="Ya" class="with-gap" @if ($berita->berita_utama == "Ya") checked @endif>
                        <label for="utama1">Ya</label>
                      </p>
                      <p>
                        <input type="radio" id="utama2" name="utama" value="Tidak" class="with-gap" @if ($berita->berita_utama == "Tidak") checked @endif>
                        <label for="utama2">Tidak</label>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col s6 m6 l6">
                  <div class="row margin-bottom">
                    <div class="input-field col s12 m12 l12">
                      <label>Status: </label>
                    </div>
                  </div>
                  <div class="row margin-bottom">
                    <div class="input-field col s12 m12 l12">
                      <p>
                        <input type="radio" id="status1" name="status" value="Aktif" class="with-gap" @if ($berita->berita_status == "Aktif") checked @endif>
                        <label for="status1">Aktif</label>
                      </p>
                      <p>
                        <input type="radio" id="status2" name="status" value="Tidak Aktif" class="with-gap" @if ($berita->berita_status == "Tidak Aktif") checked @endif>
                        <label for="status2">Tidak Aktif</label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row margin-bottom right">
              <div class="input-field col s12">
                <button type="submit" class="btn waves-effect waves-light light-blue darken-1">Simpan</button>
                <a href="{{ url('news') }}" class="btn waves-effect waves-light grey lighten-1">Kembali</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
