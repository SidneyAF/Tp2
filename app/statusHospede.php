<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statusHospede extends Model
{
    protected $fillable=['status'];
    public $timestamps=false;

    public function statusHospedes(){
        return $this->hasMany('App\Hospede');
  }
}
