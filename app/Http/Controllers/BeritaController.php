<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
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

    public function updateBerita(Request $request, $id){
      $data = $request->all();
      $kirim = Berita::find($id);
      $kirim->update($data);
      return redirect()->back()->with("OK", "Berhasil mengupdate berita.");
    }

    // START KATEGORI CRUD
    public function createKategori(Request $request){
      $data = $request->all();
      $kirim = Kategori::create($data);
      return redirect()->back()->with("OK", "Berhasil menambahkan kategori.");
    }

    public function deleteKategori($id){
      $data = Kategori::find($id);
      $data->delete();
      return redirect()->back()->with("OK", "Berhasil menghapus kategori.");
    }

    public function editKategoriDetail($id){
      $data = Kategori::find($id);
      return $data;
    }

    public function storeEditKategori(Request $request, $id){
      $data = Kategori::find($id);
      $data->kategori = $request->kategori;
      $data->save();
      return redirect()->back()->with("OK", "Berhasil mengedit kategori.");
    }

}
