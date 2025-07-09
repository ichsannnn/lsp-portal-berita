<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
      date_default_timezone_set("Asia/Jakarta");
      $this->middleware('auth');
    }
    public function index()
    {
      $user = User::orderBy('user_namalengkap')->paginate(10);
      return view('lsp.users.index', ['data' => $user]);
    }

    public function create()
    {
      return view('lsp.users.create');
    }

    public function save(Request $r)
    {
      $message = [
        'user_name.unique' => 'Username sudah digunakan!',
        'user_email.unique' => 'Email sudah digunakan!'
      ];

      $this->validate($r, [
        'user_name'  => 'required|unique:users',
        'password'  => 'required',
        'nama'      => 'required|max:255',
        'user_email'     => 'required|email|unique:users'
      ], $message);

      $user = new User;
      $user->user_name = $r->input('user_name');
      $user->user_pass = bcrypt($r->input('password'));
      $user->user_namalengkap = $r->input('nama');
      $user->user_email = $r->input('user_email');
      $user->user_status = $r->input('status');
      $user->save();

      return redirect(url('users'));
    }

    public function edit($username)
    {
      $user = User::find($username);
      return view('lsp.users.edit', ['data' => $user]);
    }

    public function update(Request $r)
    {
      $oldusername = $r->input('old_username');
      $oldemail = $r->input('old_email');
      $user = User::find($oldusername);
      $message = [
        'user_name.unique' => 'Username sudah digunakan!',
        'user_email.unique' => 'Email sudah digunakan!'
      ];

      if ($r->input('user_name') != $oldusername && $r->input('user_email') != $oldemail) {
        $this->validate($r, [
          'user_name'  => 'required|unique:users',
          'user_namalengkap'  => 'required|max:255',
          'user_email'     => 'required|email|unique:users'
        ], $message);

        $user->user_name = $r->input('user_name');
        $user->user_email = $r->input('user_email');
      } elseif ($r->input('user_name') != $oldusername && $r->input('user_email') == $oldemail) {
        $this->validate($r, [
          'user_name'  => 'required|unique:users',
          'user_namalengkap'  => 'required|max:255',
          'user_email'     => 'required|email'
        ], $message);

        $user->user_name = $r->input('user_name');
        $user->user_email = $r->input('user_email');
      } elseif ($r->input('user_name') == $oldusername && $r->input('user_email') != $oldemail) {
        $this->validate($r, [
          'user_name'  => 'required',
          'user_namalengkap'  => 'required|max:255',
          'user_email'     => 'required|email|unique:users'
        ], $message);

        $user->user_name = $r->input('user_name');
        $user->user_email = $r->input('user_email');
      }
      $user->user_namalengkap = $r->input('user_namalengkap');
      $user->user_status = $r->input('user_status');
      $user->save();


      return redirect(url('users'));
    }

    public function delete($username)
    {
      User::find($username)->delete();
      return redirect(url('users'));
    }

    public function activate($username)
    {
      $user = User::find($username);
      $user->user_status = 'Aktif';
      $user->save();

      return redirect(url('users'));
    }

    public function deactivate($username)
    {
      $user = User::find($username);
      $user->user_status = 'Tidak Aktif';
      $user->save();

      if (Auth::user()->user_status == "Aktif") {
        Auth::logout();
        return redirect('login')->with('message','Anda menonaktifkan akun anda.');
      }

      return redirect(url('users'));
    }
}
