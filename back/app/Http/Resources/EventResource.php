<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'title'=>$this->title,
            'body'=>$this->body,
            'city'=>$this->city,
            'link_join'=>$this->link_join,
            'start_at'=>$this->start_at,
            'start_date'=>$this->start_date,
            'end_at'=>$this->end_at,
            'end_date'=>$this->end_date,
            'image'=>$this->image
        ];
    }
}
