<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $guarded = [];


    public function trimesters()
    {
    	return $this->hasMany(Trimester::class);
    }
}
