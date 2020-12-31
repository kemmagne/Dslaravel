<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svg extends Model
{
    protected $guarded = [];


    public function parent_tutors()
    {

        return $this->belongsToMany(Parent_tutor::class,  'parent_svgs', 'parent_id', 'svg_id');

    }



    public function super_admins()

    {

        return $this->belongsToMany(Super_admin::class, 'administrator_svgs', 'admin_id', 'svg_id');

    }
}
