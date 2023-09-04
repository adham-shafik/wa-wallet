<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BreifResource extends JsonResource{
    public function toArray($request){
        $locale = app()->getLocale();
        return [
            'supplier_breif'=>$this->{'supplier_breif_'.$locale},
            'supplier_breif_ar'=>$this->supplier_breif_ar,
            'supplier_breif_en'=>$this->supplier_breif_en,

            'contact_us_breif'=>$this->{'contact_us_breif_'.$locale},
            'contact_us_breif_ar'=>$this->contact_us_breif_ar,
            'contact_us_breif_en'=>$this->contact_us_breif_en,

            'order_breif'=>$this->{'order_breif_'.$locale},
            'order_breif_ar'=>$this->order_breif_ar,
            'order_breif_en'=>$this->order_breif_en,

            'footer_breif'=>$this->{'footer_breif_'.$locale},
            'footer_breif_ar'=>$this->footer_breif_ar,
            'footer_breif_en'=>$this->footer_breif_en,

            'lat'=>$this->lat,
            'long'=>$this->long,
            'phone'=>$this->phone,
            'email'=>$this->email,

            'address'=>$this->{'address_'.$locale},
            'address_ar'=>$this->address_ar,
            'address_en'=>$this->address_en,

            'years_count'=>$this->years_count,
            'emp_count'=>$this->emp_count,
            'video_link'=>$this->video_link
        ];
    }
}
