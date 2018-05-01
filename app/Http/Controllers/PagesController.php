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

    public function strukturOrganisasi()
    {
      return view('pages/struktur-organisasi');
    }

    public function tipidkor(){
      return view('pages/tipidkor/home');
    }

    public function zonaIntegritas(){
      $data['aprb'] = Zi::all();
      return view('pages/tipidkor/zi/home', $data);
    }

    public function detailAprb($id){
      $data['aprb'] = Zi::all();
      $data['aprbDetail'] = Zi::findOrFail($id);
      return view('pages/tipidkor/zi/detail', $data);
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
