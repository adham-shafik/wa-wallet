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
        $results = Transaction::selectRaw('SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) as total_deposits')
                                ->selectRaw('SUM(CASE WHEN amount < 0 THEN amount ELSE 0 END) as total_withdrawals')
                                ->selectRaw('SUM(amount) as total_balance')
                                ->where('user_id', $user_id)
                                ->first();

        return response()->json([
            'total_balance' => $results->total_balance,
            'total_deposits' => $results->total_deposits,
            'total_withdrawals' => $results->total_withdrawals,
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
