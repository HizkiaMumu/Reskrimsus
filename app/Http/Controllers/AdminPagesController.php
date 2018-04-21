<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StrukturOrganisasi;
use App\Kategori;
use App\Berita;
use App\User;
use App\Htck;
use Auth;

class AdminPagesController extends Controller
{

    public function dashboard(){
      return view('dashboard/dashboard');
    }

    public function login(){
      return view('dashboard/login');
    }

    public function users(){
      $data['users'] = User::all();
      $data['no_users'] = 1;
      return view('dashboard/users', $data);
    }

    public function berita(){
      if (Auth::user()->id == 0) {
        $data['berita'] = Berita::orderBy("id", "DESC")->get();
      } else {
        $data['berita'] = Berita::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
      }
      $data['no_berita'] = 1;
      return view('dashboard/berita', $data);
    }

    public function tambahBerita(){
      $data['kategori'] = Kategori::all();
      return view('dashboard/tambah-berita', $data);
    }

    public function kategori(){
      $data['kategori'] = Kategori::all();
      return view('dashboard/kategori-berita', $data);
    }

    public function htck(){
      if (Auth::user()->id == 0) {
        $data['htck'] = Htck::orderBy("id", "DESC")->get();
      } else {
        $data['htck'] = Htck::where('user_id', Auth::user()->id)->orderBy("id", "DESC")->get();
      }
      $data['no_htck'] = 1;
      return view('dashboard/htck', $data);
    }

    public function strukturOrganisasi()
    {
      $data['struktur_organisasi'] = StrukturOrganisasi::with(['atasan'])->where('subdit', Auth::user()->subdit)->get();
      $data['no_struktur_organisasi'] = 1;
      return view('dashboard/struktur-organisasi', $data);
    }

}
