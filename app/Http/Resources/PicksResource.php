<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PicksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'team1' => $this->team1,
            'team2' => $this->team2,
            'team3' => $this->team3,
            'team4' => $this->team4,
            'team5' => $this->team5,
            'team6' => $this->team6,
            'team7' => $this->team7,
            'team8' => $this->team8,
            'team9' => $this->team9,
            'team10' => $this->team10,
            'team11' => $this->team11,
            'team12' => $this->team12,
            'team13' => $this->team13,
            'team14' => $this->team14,
            'team15' => $this->team15,
            'team16' => $this->team16,
            'spread1' => $this->spread1,
            'spread2' => $this->spread2,
            'spread3' => $this->spread3,
            'spread4' => $this->spread4,
            'spread5' => $this->spread5,
            'spread6' => $this->spread6,
            'spread7' => $this->spread7,
            'spread8' => $this->spread8,
            'spread9' => $this->spread9,
            'spread10' => $this->spread10,
            'spread11' => $this->spread11,
            'spread12' => $this->spread12,
            'spread13' => $this->spread13,
            'spread14' => $this->spread14,
            'spread15' => $this->spread15,
            'spread16' => $this->spread16,

            'losing1' => $this->losing1,
            'losing2' => $this->losing2,
            'losing3' => $this->losing3,
            'losing4' => $this->losing4,
            'losing5' => $this->losing5,
            'losing6' => $this->losing6,
            'losing7' => $this->losing7,
            'losing8' => $this->losing8,
            'losing9' => $this->losing9,
            'losing10' => $this->losing10,
            'losing11' => $this->losing11,
            'losing12' => $this->losing12,
            'losing13' => $this->losing13,
            'losing14' => $this->losing14,
            'losing15' => $this->losing15,
            'losing16' => $this->losing16,

            'favorite1' => $this->favorite1,
            'favorite2' => $this->favorite2,
            'favorite3' => $this->favorite3,
            'favorite4' => $this->favorite4,
            'favorite5' => $this->favorite5,
            'favorite6' => $this->favorite6,
            'favorite7' => $this->favorite7,
            'favorite8' => $this->favorite8,
            'favorite9' => $this->favorite9,
            'favorite10' => $this->favorite10,
            'favorite11' => $this->favorite11,
            'favorite12' => $this->favorite12,
            'favorite13' => $this->favorite13,
            'favorite14' => $this->favorite14,
            'favorite15' => $this->favorite15,
            'favorite16' => $this->favorite16,


            'created_at' => $this->created_at

        ];
    }
}
