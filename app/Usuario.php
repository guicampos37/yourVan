<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    public function acesso() {
        return $this -> hasOne(Acesso::class, 'acesso_id');
    }
}
