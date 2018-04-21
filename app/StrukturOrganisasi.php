<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $guarded = ['id'];

    function atasan()
    {
        return $this->belongsTo('App\StrukturOrganisasi', 'parent_id');
    }
}
