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

    }
    function changeTrader(Request $request){
        
    }
}
