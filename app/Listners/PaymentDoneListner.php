<?php
namespace App\Listeners;

use App\Events\PaymentDoneEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class PaymentDoneListener implements ShouldQueue{
    public function __construct()
    {
        //
    }

    public function handle(PaymentDoneEvent $event){
        $payment = $event->payment;
        $amount = $payment->amount;
        $created_at = $payment->created_at;
        Log::info("Payment of $amount dollars made at $created_at");
    }
}
