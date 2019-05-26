<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Schedule as ScheduleResource;

class Game extends JsonResource
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
            'games' => $this->games,
            'week' => $this->week,
            'date' => $this->date,
            'schedules' => ScheduleResource::collection($this->schedules),
        ];
    }
}
