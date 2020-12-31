<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Super_admin extends Model
{
    protected $guarded = [];


    public function svgs()

    {

        return $this->belongsToMany(Svg::class, 'administrator_svgs', 'admin_id', 'svg_id');

    }


    public function schools()
    {
        return $this->belongsTo(School::class);
    }
}

