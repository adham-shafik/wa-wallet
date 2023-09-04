<?php
namespace App\Repositories;

use App\Models\Transaction;

class WalletRepository{
    public function deposit($user_id, $amount){
        Transaction::create([
            'user_id' => $user_id,
            'amount' => $amount,
            'status' => 'pending',
        ]);
    }

    public function withdraw($user_id, $amount){
        Transaction::create([
            'user_id' => $user_id,
            'amount' => -1*$amount,
            'status' => 'pending',
        ]);
    }
}
