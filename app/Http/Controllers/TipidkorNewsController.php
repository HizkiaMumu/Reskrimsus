<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Berita;
use App\User;
use Carbon\Carbon;

class TipidkorNewsController extends Controller
{

    public function home(){
      $data['numberOfColumns'] = 0;
      $data['kategori'] = Kategori::all();
      $data['berita'] = Berita::with('user')->orderBy("created_at", "desc")->get();
      $data['berita_baru'] = Berita::with('user')->take(7)->orderBy("created_at", "desc")->get();
      return view('pages/tipidkor/news/home', $data);
    }

    public function allNews(){
      $data['numberOfColumns'] = 0;
      $data['kategori'] = Kategori::all();
      $data['berita'] = Berita::with('user')->orderBy("created_at", "desc")->get();
      return view('pages/tipidkor/news/all-news', $data);
    }

    public function categoryFilter($kategori){
      $data['numberOfColumns'] = 0;
      $data['kategori'] = Kategori::all();
      $data['kategori_terpilih'] = Kategori::where('kategori', $kategori)->first();
      $data['berita'] =  Berita::with('user')->where('kategori_id', $data['kategori_terpilih']->id)->orderBy("created_at", "desc")->get();
      return view('pages/tipidkor/news/category-filter', $data);
    }

    public function readNews($id){
      $data['numberOfColumns'] = 0;
      $data['berita'] = Berita::findOrFail($id);
      $data['kategori'] = Kategori::all();
      $data['artikel_terkait'] = Berita::with('user')->take(6)->where('kategori_id', $data['berita']->kategori_id)->orderBy("created_at", "desc")->get();
      return view('pages/tipidkor/news/detail-news', $data);
    }

}
