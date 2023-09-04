<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Transaction;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use App\Events\PaymentDoneEvent;

class PayUserCommand extends Command
{
    protected $signature = 'pay:users';
    protected $description = 'Pay all users based on confirmed transactions';

    public function __construct(){
        parent::__construct();
    }

    public function handle(){
        DB::beginTransaction();

        try {
            $users_with_amounts = Transaction::select('user_id', DB::raw('SUM(amount) as total_amount'))
            ->where('status', 'confirmed')
            ->whereNull('payment_id')
            ->lockForUpdate()
            ->groupBy('user_id')
            ->having('total_amount', '>', 0)
            ->get();


            foreach ($users_with_amounts as $user) {
                $payment = Payment::create([
                    'user_id'    =>$user->user_id,
                    'amount'=>$user->total_amount
                ]);

                Transaction::whereUserId($user->user_id)->confirmed()->notPaid()->update(['payment_id' => $payment->id]);
            }

            DB::commit();

            event(new PaymentDoneEvent($payment));


        } catch (\Exception $e) {
            // Rollback the transaction on error
            DB::rollback();
            $this->error('Payment process failed. Error: ' . $e->getMessage());
        }
    }
}
