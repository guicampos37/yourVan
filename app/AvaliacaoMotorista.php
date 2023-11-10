<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoMotorista extends Model
{
    protected $table = 'avaliacao_motorista';
    public $timestamps = false;

    protected $fillable = [
        'motorista_id',
        'nota',   
    ];

    public function motorista()
    {
        return $this->belongsTo(Usuario::class, 'motorista_id');
    }
}
