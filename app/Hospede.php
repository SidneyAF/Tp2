<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    protected $fillable=['nome', 'idade', 'rg', 'telefone'];
    public $timestamps=false;

    public function reserva(){
		return $this->belongsTo('App\Reserva');
    }

    
}
