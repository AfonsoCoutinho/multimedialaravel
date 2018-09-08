<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Course extends JsonResource
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
            'description' => $this->description,
            'objectives_description' => $this->objectives_description,
            'objectives' => Objective::collection($this->objectives),
            'careers_description' => $this->careers_description,
            'careers' => Career::collection($this->careers),
            'contacts' => Contact::collection($this->contacts),


        ];
    }
}
