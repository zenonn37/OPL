<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'team' => $this->team,
            'wins' => $this->wins,
            'loses' => $this->loses,
            'points' => $this->points,
            'rank' => $this->rank,
            'ties' => $this->ties

        ];
    }
}
