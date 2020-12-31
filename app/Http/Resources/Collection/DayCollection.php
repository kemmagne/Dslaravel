<?php

namespace App\Http\Resources\Collection;

use Illuminate\Http\Resources\Json\JsonResource;

class DayCollection extends JsonResource
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
            'name'  => $this->name,
            'nbres_periode' => $this->nbres_periode,
            'starting_time' => $this->starting_time,
            'ending_time' => $this->ending_time,

             'periods' => $this->periods,

            'href' => [

                'periods' => route('periods.index' ,$this->id)
                ]
        ];
    }
}


