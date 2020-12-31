<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    protected $guarded = [];

    public function matieres()

    {

        return $this->belongsToMany(Course::class, 'Bulletin_course', 'bulletin_id', 'course_id');

    }


    public function semesters()
    {

        return $this->belongsToMany(Semester::class, 'semester_bulletins', 'semester_id', 'bulletin_id');

    }

    public function students()

    {

        return $this->hasOne(Student::class);

    }
}
