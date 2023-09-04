<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource{
    public function toArray($request){
        $locale = app()->getLocale();
        return [
            'title'=>$this->{'title_'.$locale},
            'title_ar'=>$this->title_ar,
            'title_en'=>$this->title_en,
            'content_ar'=>$this->content_ar,
            'content_en'=>$this->content_en,
            'content'=>$this->{'content_'.$locale},
            'image'=>url('uploads/pics/'.$this->image)
        ];
    }
}
