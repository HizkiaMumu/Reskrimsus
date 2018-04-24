<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Htck;
use App\Zi;

class PagesController extends Controller
{

    public function home(){
      return view('pages/home');
    }

    public function tipidkor(){
      return view('pages/tipidkor/home');
    }

    public function zonaIntegritas(){
      $data['aprb'] = Zi::all();
      return view('pages/tipidkor/zi/home', $data);
    }

    public function htckTipidkor(){
      $htck = Htck::where('pemilik', 'tipidkor')->orderBy("id", "DESC")->first();
      return redirect($htck->path);
    }

    public function strukturOrganisasiTipidkor()
    {
      return view('pages/tipidkor/struktur-organisasi');
    }

}
