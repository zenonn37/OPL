<?php

namespace App\Http\Resources;

use App\Http\Resources\ProfileResource;
use App\Http\Resources\LeagueResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'id' => $this->id,
            'profile' => ProfileResource::collection($this->profiles),
            'league' => LeagueResource::collection($this->leagues)


        ];
    }
}
