<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource{
    public function toArray($request){
        return [
            'id'=>$this->id,
            'status'=>$this->status,
            'image'=>url('uploads/pics/'.$this->image),
            'status_translated'=>__('site.'.$this->status),
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'name'=>$this->{'name_'.app()->getLocale()},
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en
        ];
    }
}
