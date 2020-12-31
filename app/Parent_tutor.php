<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent_tutor extends Model
{
    protected $guarded = [];

    public function student()
    {
    	return $this->hasMany(Student::class);
    }


    public function svgs()
    {

        return $this->belongsToMany(Svg::class, 'parent_svgs', 'parent_id', 'svg_id');

    }
}
