<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    public function usuarios() {
        return $this -> belongsToMany(Usuario::class, 'acesso_id');
    }
}
