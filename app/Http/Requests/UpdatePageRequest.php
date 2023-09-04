<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title_ar'=>'required|max:250',
            'title_en'=>'required|max:250',
            'content_ar'=>'required|max:1000',
            'content_en'=>'required|max:1000',
            'image'=>'nullable|file|mimes:png,jpg,jpeg,webp|max:10240'
        ];
    }
}
