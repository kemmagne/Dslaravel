<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];


    public function matieres()

    {

        return $this->belongsToMany(Course::class, 'course_students', 'course_id', 'student_id');

    }


    public function classes()
    {
    	return $this->belongsTo(Classe::class);
    }


    public function parents()
    {
    	return $this->belongsTo(Parent_tutor::class);
    }


    public function bulletins()
    {
    	return $this->belongsTo(Bulletin::class);
    }

    public function periods()
    {
    	return $this->hasMany(period::class);
    }


    public function jours()
    {
    	return $this->hasMany(jour::class);
    }


}
