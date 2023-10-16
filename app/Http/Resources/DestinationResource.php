<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DestinationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'categories_id' => $this->category->name,
            'districts_id' => $this->district->name,
            'name' => $this->name,
            'content' => $this->content,
            'image' => $this->getImage(),
        ];
    }
}
