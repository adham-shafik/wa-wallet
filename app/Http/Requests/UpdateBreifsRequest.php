<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBreifsRequest extends FormRequest{
    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'supplier_breif_ar'=>'required|max:500',
            'supplier_breif_en'=>'required|max:500',
            'order_breif_ar'=>'required|max:500',
            'order_breif_en'=>'required|max:500',
            'footer_breif_ar'=>'required|max:500',
            'footer_breif_en'=>'required|max:500',
            'contact_us_breif_ar'=>'required|max:500',
            'contact_us_breif_en'=>'required|max:500',
            'lat'=>'required|max:50',
            'long'=>'required|max:50',
            'phone'=>'required|max:150',
            'address_ar'=>'required|max:150',
            'address_en'=>'required|max:150',
            'email'=>'required|max:150|email',
            'years_count'=>'required|integer|gt:0',
            'emp_count'=>'required|integer|gt:0',
            'video_link'=>'required|active_url'
        ];
    }
}
