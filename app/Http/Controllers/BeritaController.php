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

    public function deleteBerita($id){
      $data = Berita::find($id);
      $data->delete();
      return redirect()->back()->with('OK', 'Berhasil menghapus data.');
    }

    public function editBerita($id){
      $data = Berita::find($id);
      return $data;
    }

    public function updateBerita(Request $request, $id)
    {
      $data = $request->all();
      $kirim = Berita::find($id);
      $kirim->update($data);
      return redirect()->back()->with("OK", "Berhasim mengupdate data.");
    }

}
