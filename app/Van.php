<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    public $timestamps = false;

    public function instituicoes() {
        return $this->belongsToMany(Instituicao::class, 'van_instituicoes');
    }

    public function bairros() {
        return $this->belongsToMany(Bairro::class, 'van_bairros');
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'user_id');
    }
}
