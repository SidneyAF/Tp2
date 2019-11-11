<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable=['funcionario_id','quarto_id' ,'quantidadePessoas','checkin','checkout','status','pacote_id','precoTotal'];
    public $timestamps=false;

    public function funcionario(){
        return $this->belongsTo('App\Funcionario');
    }
     
    public function hospedes(){
        return $this->hasMany('App\Hospede');
    }

    public function pacote(){
        return $this->belongsTo('App\Pacote');
    }

    public function quartos(){
        return $this->belongsToMany('App\Quarto');
    }

}
