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
      if ($request->hasFile('thumbnail')) {
        $path = $request->file('thumbnail')->store('/public/thumbnail'); // with /public on path
        $filename = $request->file('thumbnail')->hashName(); // remove the /public on path
        $validPath = '/storage/thumbnail/' . $filename;
        $data['thumbnail'] = $validPath;
      }
      $kirim = Berita::create($data);
      return redirect()->back()->with('OK', 'Berhasil menambahkan berita.');
    }

    public function deleteBerita($id){
      $data = Berita::find($id);
      $data->delete();
      return redirect()->back()->with('OK', 'Berhasil menghapus berita.');
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
      return redirect()->back()->with("OK", "Berhasil mengupdate berita.");
    }

}
