<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialLinksResource extends JsonResource{
    public function toArray($request){
        return [
            'facebook_link'=>$this->facebook_link,
            'youtube_link'=>$this->youtube_link,
            'twitter_link'=>$this->twitter_link,
            'linkedin_link'=>$this->linkedin_link
        ];
    }
}
