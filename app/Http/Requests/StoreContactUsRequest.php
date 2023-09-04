<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUsRequest extends FormRequest{
    public function authorize(){
        return true;
    }


    public function rules(){
        return [
            'name'=>'required|max:250',
            'phone'=>'required|max:50',
            'email'=>'required|email',
            'message'=>'required|max:1000'
        ];
    }
}
