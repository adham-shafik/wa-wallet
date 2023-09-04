<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageServiceRequest extends FormRequest{
    public function authorize()    {
        return true;
    }

    public function rules(){
        return [
            'title_ar'=>'required|max:350',
            'title_en'=>'required|max:350',
            'content_ar'=>'required|max:3500',
            'content_en'=>'required|max:3500',
            'image'=>($this->routeIs('services.store')? 'required' : 'nullable') . '|file|mimes:png,jpg,jpeg,webp|max:1024',
        ];
    }
}
