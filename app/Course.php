<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function bulletins()
    {

        return $this->belongsToMany(Bulletin::class, 'bulletin_courses', 'bulletin_id', 'course_id');

    }

    public function students()
    {

        return $this->belongsToMany(Student::class, 'course_students', 'course_id', 'student_id');

    }


    public function classes()
    {
    	return $this->belongsTo(Classe::class);
    }
}
