<?php

namespace App\Http\Resources\Collection;

use Illuminate\Http\Resources\Json\JsonResource;

class WeekCollection extends JsonResource
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

            'nbers_day' => $this->nbers_day,

            'starting_time' => $this->starting_time,

            'ending_time' => $this->ending_time,

         //   'days' => $this->jours,

            'href' => [

            'days' => route('days.index' ,$this->id)
            ]
        ];
    }
}
