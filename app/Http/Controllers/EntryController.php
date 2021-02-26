<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Trade;
class EntryController extends Controller
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
        $trades = Trade::whereUserId(Auth::user()->id)->get();
        return view('client.entry',['trades'=>$trades]);
    }
    
    public function postCreateNewUserTrade(Request $request, $id)
    {
        if($request->amount > 0){
        if(Auth::user()->balance >= $request->amount){
            if($settings->slotOpen){
                $trade['user_id'] = $id;
                $trade['trader_id'] = $request->trader;
                $trade['amount'] = $request->amount;
                $trade['plan'] = $request->plan;
                $trade['return'] = $request->return;
                $trade['plan'] = $request->entryLevel;
                $trade['status'] = 'pending approval';
                Trade::create($trade);
                Auth::user()->update(['balance'=>(Auth::user()->balance - $request->amount)]);
                return back()->with('success', 'New entry created and awaits approval!');
            }else{
                return back()->with('error', 'Unauthorized Request: Slot is closed');
            }
        }else{
            return back()->with('error', 'Insufficient balance');
        }}else{
            return back()->with('error', 'Invalid amount');
        }
    }
}
