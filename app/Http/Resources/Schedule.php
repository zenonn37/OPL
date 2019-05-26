<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Schedule extends JsonResource
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
            'home' => $this->home,
            'away' => $this->away,
            'game' => $this->game,
            'favorite' => $this->favorite,
            'spread' => $this->spread,
            'location' => $this->location,
            'time' => $this->time

        ];
    }
}
