<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $guarded = [];

    public function bulletins()
    {

        return $this->belongsToMany(Bulletin::class, 'semester_bulletins', 'semester_id', 'bulletin_id');

    }


    public function trimesters()
    {
    	return $this->belongsTo(Trimester::class);
    }



    public function weeks()
    {
    	return $this->hasMany(Week::class);
    }
}
