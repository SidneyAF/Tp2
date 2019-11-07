<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable=['nome', 'cargo', 'rg'];
    public $timestamps=false;

    public function reservas(){
		return $this->hasMany('App\Reserva');
    }

}
