<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaQuarto extends Model
{
    protected $fillable=['reserva_id', 'quarto_id'];
    public $timestamps=false;

}
