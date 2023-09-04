<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model{
    protected $guarded = [];
    use HasFactory;

    public function scopeNotPaid($query){
        return $query->whereNull('payment_id');
    }

    public function scopeConfirmed($query){
        return $query->whereStatus('confirmed');
    }

}
