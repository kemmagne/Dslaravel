<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $guarded = [];


    public function students()
    {
    	return $this->belongsTo(Student::class);
    }


    public function jours()
    {
    	return $this->belongsTo(Day::class);
    }
}
