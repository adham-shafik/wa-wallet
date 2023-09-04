<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKeywordsRequest extends FormRequest{
    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'home_keywords_ar'=>'required|max:500',
            'home_keywords_en'=>'required|max:500',
            'home_title_ar'=>'required|max:500',
            'home_title_en'=>'required|max:500',

            'contact_us_keywords_ar'=>'required|max:500',
            'contact_us_keywords_en'=>'required|max:500',
            'contact_us_title_ar'=>'required|max:500',
            'contact_us_title_en'=>'required|max:500',

            'orders_keywords_ar'=>'required|max:500',
            'orders_keywords_en'=>'required|max:500',
            'orders_title_ar'=>'required|max:500',
            'orders_title_en'=>'required|max:500'

        ];
    }
}
