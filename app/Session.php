<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

    protected $guarded = [];



    public function classes()
    {
    	return $this->hasMany(Classe::class);
    }
}
