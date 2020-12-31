<?php

namespace App\Http\Resources\Collection;

use Illuminate\Http\Resources\Json\JsonResource;

class Parent_tutorCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'code' => $this->code,

                'students' => $this->students,

                'href' => [

                'student' => route('students.index' ,$this->id)
                ]
            ];
     }
}
