<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest{
    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'name'=>'required|max:200',
            'address'=>'required|max:300',
            'company_name'=>'required|max:200',
            'company_category'=>'required|max:200',
            'website'=>'nullable|active_url',
            'email'=>'required|max:200|email',
            'mobile'=>'required|max:15',
            'order_details'=>'required|max:1000'
        ];
    }
}
