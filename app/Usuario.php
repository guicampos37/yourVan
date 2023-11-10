<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    public function acesso() {
        return $this -> hasOne(Acesso::class, 'acesso_id');
    }

    public function van() {
        return $this->hasOne(Van::class, 'user_id');
    }

    public function avaliacoes() {
        return $this->hasMany(AvaliacaoMotorista::class, 'motorista_id');
    }
}
