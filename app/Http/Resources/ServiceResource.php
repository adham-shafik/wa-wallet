<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource{
    public function toArray($request){
        return [
            'id'=>$this->id,
            'title'=>$this->{'title_'.app()->getLocale()},
            'title_ar'=>$this->title_ar,
            'title_en'=>$this->title_en,
            'content'=>$this->{'content_'.app()->getLocale()},
            'content_ar'=>$this->content_ar,
            'content_en'=>$this->content_en,
            'image'=>url('uploads/pics/'.$this->image)
        ];
    }
}
