<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{

    public function weeks()
    {
    	return $this->belongsTo(Week::class);
    }

    public function periods()
    {
    	return $this->hasMany(Period::class);
    }
}
