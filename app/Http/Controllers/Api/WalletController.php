<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWalletRequest;
use Illuminate\Http\Request;
use App\Repositories\WalletRepository;
use App\Models\Transaction;


class WalletController extends Controller{
    protected $walletRepository;

    public function __construct(WalletRepository $walletRepository){
        $this->walletRepository = $walletRepository;
    }


    public function index(Request $request){
        $user_id = $request->user_id;
        $results = Transaction::selectRaw("SUM(CASE WHEN amount > 0 AND status='pending' THEN amount ELSE 0 END) as pending_total_deposits")
                                ->selectRaw("SUM(CASE WHEN amount < 0 AND status='pending' THEN amount ELSE 0 END) as pending_total_withdrawals")
                                ->selectRaw("SUM(CASE WHEN amount > 0 AND status='pending' THEN amount ELSE 0 END) as confirmed_total_deposits")
                                ->selectRaw("SUM(CASE WHEN amount < 0 AND status='pending' THEN amount ELSE 0 END) as confirmed_total_deposits")
                                ->where('user_id', $user_id)
                                ->first();

        return response()->json([
            'confirmed_total_deposits' => $results->confirmed_total_deposits,
            'confirmed_total_withdrawals' => $results->confirmed_total_withdrawals,
            'pending_total_deposits' => $results->pending_total_deposits,
            'pending_total_withdrawals' => $results->pending_total_withdrawals,
        ]);
    }

    public function store(StoreWalletRequest $request){
        $user_id = $request->user_id;
        $amount = $request->amount;
        if($amount>0){
            $this->walletRepository->deposit($user_id, $amount);
        }else{
            $this->walletRepository->withdraw($user_id, $amount);
        }

        return response()->json(['message'=>'Saved successfully']);
    }



}
