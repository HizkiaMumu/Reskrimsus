<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\User;

class AdminPagesController extends Controller
{

    public function dashboard(){
      return view('dashboard/dashboard');
    }

    public function login(){
      return view('dashboard/login');
    }

    public function users()
    {
      $data['users'] = User::all();
      $data['no_users'] = 1;
      return view('dashboard/users', $data);
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
