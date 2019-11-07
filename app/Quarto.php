<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    protected $fillable=['categoria', 'preco' ,'statusDisponibilidade'];
    public $timestamps=false;

    public function reservas(){
        return $this->hasMany('App\Reserva');
    }
}
