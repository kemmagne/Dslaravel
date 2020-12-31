<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = [];


    public function super_admins()
    {
        return $this->hasMany(Super_admin::class);
    }

    public function classes()
    {
    	return $this->hasMany(Classe::class);
    }

}
