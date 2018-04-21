<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    protected $guarded = ['id'];

    public function kategori(){
      return $this->belongsTo('App\Kategori');
    }

}
