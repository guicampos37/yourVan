<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    public $timestamps = false;
    protected $table = 'instituicoes';

    public function vans() {
        return $this->belongsToMany(Van::class, 'van_instituicoes');
    }
}
