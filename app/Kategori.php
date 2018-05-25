<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $guarded = ['id'];

    public function beritas(){
      return $this->hasMany('App\Berita');
    }
}
