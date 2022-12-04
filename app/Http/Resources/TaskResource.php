<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'title'          => $this->title,
            'description'    => $this->description,
            'assigned_by_id' => $this->assigned_by_id,
            'assigned_to_id' => $this->assigned_to_id,
        ];
    }
}
