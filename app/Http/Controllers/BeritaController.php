<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Auth;

class BeritaController extends Controller
{

    public function createBerita(Request $request){
      $data = $request->all();
      $data['penulis'] = Auth::user()->nama;
      $kirim = Berita::create($data);
      return redirect()->back()->with('OK', 'Berhasil menambahkan berita.');
    }

}
