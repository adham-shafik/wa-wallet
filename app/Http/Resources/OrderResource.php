<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource{

    public function toArray($request)    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'address'=>$this->address,
            'company_name'=>$this->company_name,
            'company_category'=>$this->company_category,
            'mobile'=>$this->mobile,
            'website'=>$this->website,
            'email'=>$this->email,
            'order_details'=>$this->order_details,
            'created_at'=>$this->created_at
        ];
    }
}
