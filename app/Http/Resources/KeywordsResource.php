<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KeywordsResource extends JsonResource{
    public function toArray($request){
        $locale = app()->getLocale();
        return [
            'home_keywords'=>$this->{'home_keywords_'.$locale},
            'home_keywords_ar'=>$this->home_keywords_ar,
            'home_keywords_en'=>$this->home_keywords_en,

            'home_title'=>$this->{'home_title_'.$locale},
            'home_title_ar'=>$this->home_title_ar,
            'home_title_en'=>$this->home_title_en,

            'contact_us_keywords'=>$this->{'contact_us_keywords_'.$locale},
            'contact_us_keywords_ar'=>$this->contact_us_keywords_ar,
            'contact_us_keywords_en'=>$this->contact_us_keywords_en,

            'contact_us_title'=>$this->{'contact_us_title_'.$locale},
            'contact_us_title_ar'=>$this->contact_us_title_ar,
            'contact_us_title_en'=>$this->contact_us_title_en,

            'orders_keywords'=>$this->{'orders_keywords_'.$locale},
            'orders_keywords_ar'=>$this->orders_keywords_ar,
            'orders_keywords_en'=>$this->orders_keywords_en,


            'orders_title'=>$this->{'orders_title_'.$locale},
            'orders_title_ar'=>$this->orders_title_ar,
            'orders_title_en'=>$this->orders_title_en,

        ];
    }
}
