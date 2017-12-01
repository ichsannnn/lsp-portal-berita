<ul id="slide-out" class="side-nav fixed">
  <li class="waves-effect waves-block @if(str_is(url('categories').'*',url()->current()))active @endif"><a href="{{ url('categories') }}"><i class="material-icons">local_offer</i>Kategori</a></li>
  <li class="waves-effect waves-block @if(str_is(url('news').'*',url()->current()))active @endif"><a href="{{ url('news') }}"><i class="material-icons">local_library</i>Berita</a></li>
  <li class="waves-effect waves-block @if(str_is(url('comments').'*',url()->current()))active @endif"><a href="{{ url('comments') }}"><i class="material-icons">comment</i>Komentar</a></li>
  <li class="waves-effect waves-block @if(str_is(url('users').'*',url()->current()))active @endif"><a href="{{ url('users') }}"><i class="material-icons">account_circle</i>Pengguna</a></li>
</ul>
