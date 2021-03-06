<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;
use App\Models\Settings;
use Auth;
use Mail;

class WithdrawController extends Controller
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
        
        $withdrawals = Withdrawal::whereUserId(Auth::user()->id)->get();
        return view('client.withdraw',['withdrawals'=>$withdrawals]);
    }

    public function withdrawSubmit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'bitcoinAddress' => 'required',
            'crypto' => 'required'
        ]);
        if(($request->amount>0) && ($request->amount<=Auth::user()->balance)){
        $sav['user_id'] = Auth::user()->id;
        $sav['amount'] = $request->amount;
        $sav['status'] = 'pending';
        $sav['bitcoinAddress'] = $request->bitcoinAddress;
        $sav['crypto'] = $request->crypto;
        Withdrawal::create($sav);
        Auth::user()->balance -= $request->amount;
        Auth::user()->save();
        $set = Settings::first();
        $data = array('name'=>Auth::user()->name,'email'=>Auth::user()->email,'created_at'=>date('Y-m-d h:i:s'),'amount'=>$request->amount);

          Mail::send('mail.depositmail', $data, function($message) use ($set) {
             $message->to($set->email, 'AdmiralMarketsPro')->subject
                ('New Withdrawal Request');
             $message->from($set->email,'AdmiralMarketsPro');
          });
        return back()->with('success', 'Withdrawal received. Under processing!');
            
        }else{
            return back()->with('error', 'Amount must be valid. You must have sufficient funds to carry out transaction');
        }
    }
}
