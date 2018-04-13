<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
      return view('pages/home');
    }

    public function tipidkor(){
      return view('pages/tipidkor/home');
    }

    public function zonaIntegritas(){
      return view('pages/tipidkor/zi');
    }

}
