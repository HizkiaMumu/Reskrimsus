<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Berita;

class TipidkorNewsController extends Controller
{

    public function home(){
      $data['berita'] = Berita::orderBy("created_at", "desc")->get();
      $data['kategori'] = Kategori::all();
      $data['berita_baru'] = Berita::take(7)->orderBy("created_at", "desc")->get();
      return view('pages/tipidkor/news/home', $data);
    }

    public function allNews(){
      $data['berita'] = Berita::orderBy("created_at", "desc")->get();
      $data['kategori'] = Kategori::all();
      return view('pages/tipidkor/news/all-news', $data);
    }

    public function categoryFilter($kategori){
      $data['kategori_terpilih'] = Kategori::where('kategori', $kategori)->first();
      $data['kategori'] = Kategori::all();
      return view('pages/tipidkor/news/category-filter', $data);
    }

    public function readNews($id){
      $data['berita'] = Berita::findOrFail($id);
      $data['kategori'] = Kategori::all();
      $data['artikel_terkait'] = Berita::take(6)->where('kategori_id', $data['berita']->kategori_id)->orderBy("created_at", "desc")->get();
      return view('pages/tipidkor/news/detail-news', $data);
    }

}
