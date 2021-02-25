<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Settings;
use Auth;
use Mail;
class DepositController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $deposits = Deposit::whereUserId(Auth::user()->id)->get();
        return view('client.deposit',['deposits'=>$deposits]);
    }
    
    public function addDeposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric'
            ]);
            
            $deposit['user_id'] = Auth::user()->id;
            $deposit['amount'] = $request->amount;
            $deposit['status'] = 'pending';
            Deposit::create($deposit);
            $set = Settings::first();
            $data = array('name'=>Auth::user()->name,'email'=>Auth::user()->email,'created_at'=>date('Y-m-d h:i:s'),'amount'=>$request->amount);
   
              Mail::send('mail.depositmail', $data, function($message) use ($set) {
                 $message->to($set->email, 'AdmiralMarketsPro')->subject
                    ('New Deposit Request');
                 $message->from($set->email,'AdmiralMarketsPro');
              });
        return back()->with('success', 'Deposit request received, awaiting payment');
    }
}
