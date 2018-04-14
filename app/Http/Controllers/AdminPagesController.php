<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class AdminPagesController extends Controller
{

    public function dashboard(){
      return view('dashboard/dashboard');
    }

    public function login(){
      return view('dashboard/login');
    }

    public function berita(){
      $data['berita'] = Berita::all();
      $data['no_berita'] = 1;
      return view('dashboard/berita', $data);
    }

    public function tambahBerita(){
      return view('dashboard/tambah-berita');
    }

}
