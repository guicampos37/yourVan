<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'ar_condicionado',
        'wifi',
        'teto_alto',
        'porta_auto',
        'assistente',
        'poltrona_estofada',
    ];

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
