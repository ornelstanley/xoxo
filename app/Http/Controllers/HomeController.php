<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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
        if(Auth::user()->isAdmin == 1){
            return view('admin.users');
        }else{
        return view('client.home');
        }
    }

    function reportTrader(Request $request){
        $request->validate([
            'reason' => 'required'
            ]);
        $set = Settings::first();
            $data = array('name'=>Auth::user()->name,'email'=>Auth::user()->email,'created_at'=>date('Y-m-d h:i:s'),'reason'=>$request->reason);
   
              Mail::send('mail.reporttrader', $data, function($message) use ($set) {
                 $message->to($set->email, 'AdmiralMarketsPro')->subject
                    ('New Report Trader Request');
                 $message->from($set->email,'AdmiralMarketsPro');
              });
        return back()->with('success', 'Report received. We will contact you soon');
    }
    function changeTrader(Request $request){
        $request->validate([
            'reason' => 'required',
            'trader_id' => 'required'
            ]);
        $set = Settings::first();
            $data = array('name'=>Auth::user()->name,'email'=>Auth::user()->email,
            'created_at'=>date('Y-m-d h:i:s'),'reason'=>$request->reason,'trader_id'=>$request->trader_id);
   
              Mail::send('mail.changetrader', $data, function($message) use ($set) {
                 $message->to($set->email, 'AdmiralMarketsPro')->subject
                    ('Change Trader Request');
                 $message->from($set->email,'AdmiralMarketsPro');
              });
        return back()->with('success', 'Change trader request received. We will contact you soon');
    }
}
