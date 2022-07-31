<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// api response template
class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return all
        // return parent::toArray($request);
        //return specific elements
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
        ];
    }

    // add other stuff to the array
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://fedaa.com')
        ];
    }
}
