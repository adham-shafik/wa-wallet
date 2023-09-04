<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagePartnerRequest extends FormRequest{
    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'name_ar'=>'required|max:200',
            'name_en'=>'required|max:200',
            'image' => ($this->routeIs('partners.store') ? 'required' : 'nullable').'|file|mimes:png,jpg,png,jpeg,webp|max:10240',
            'status'=>'required|in:active,inactive'
        ];
    }
}
