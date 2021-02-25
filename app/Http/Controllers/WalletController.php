<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Deposit;
use App\Models\Withdrawal;
class WalletController extends Controller
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
        $withdrawals = Withdrawal::whereUserId(Auth::user()->id)->get();
        $transactions = collect()->concat($deposits)->concat($withdrawals);
        return view('client.wallet',['transactions'=>$transactions->sortBy('created_at')]);
    }
    
}
