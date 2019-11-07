<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    protected $fillable=['refeicoes', 'custoAdicional','eventos'];
    public $timestamps=false;

    public function reservas(){
		return $this->hasMany('App\Reserva');
    }
}
