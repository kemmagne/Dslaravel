<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $guarded = [];



    public function semesters()
    {
    	return $this->belongsTo(Semester::class);
    }


    public function jours()
    {
    	return $this->hasMany(Day::class);
    }

}
