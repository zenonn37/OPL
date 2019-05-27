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

        ];
    }
}
