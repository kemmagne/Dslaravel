<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trimester extends Model
{
    protected $guarded = [];


    public function years()
    {
    	return $this->belongsTo(Year::class);
    }


    public function semesters()
    {
    	return $this->hasMany(Semester::class);
    }
}
