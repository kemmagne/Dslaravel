<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function schools()
    {
    	return $this->belongsTo(School::class);
    }



    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function matieres()
    {
          return $this->hasMany(Course::class);
    }

}
