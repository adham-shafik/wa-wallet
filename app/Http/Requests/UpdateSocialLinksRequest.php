<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSocialLinksRequest extends FormRequest{
    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'facebook_link'=>'required|active_url',
            'youtube_link'=>'required|active_url',
            'linkedin_link'=>'required|active_url',
            'twitter_link'=>'required|active_url',
        ];
    }
}
