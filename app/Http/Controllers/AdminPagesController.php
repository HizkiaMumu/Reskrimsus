<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{

    public function dashboard(){
      return view('dashboard/dashboard');
    }

    public function login(){
      return view('dashboard/login');
    }

    public function berita(){
      return view('dashboard/berita');
    }

    public function tambahBerita(){
      return view('dashboard/tambah-berita');
    }

}
