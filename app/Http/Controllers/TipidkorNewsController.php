<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class TipidkorNewsController extends Controller
{

    public function home(){
      $data['berita'] = Berita::all();
      return view('pages/tipidkor/news/home', $data);
    }

}
