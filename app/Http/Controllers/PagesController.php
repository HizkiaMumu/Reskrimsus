<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Htck;

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

    public function htckTipidkor(){
      $htck = Htck::where('pemilik', 'tipidkor')->orderBy("id", "DESC")->first();
      return redirect($htck->path);
    }

}
