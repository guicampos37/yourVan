<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    public $timestamps = false;

    public function vans() {
        return $this->belongsToMany(Usuario::Class, 'van_bairros');
    }
}
