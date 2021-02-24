<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class ProfileController extends Controller
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
        if(Auth::user()->referrerCode != null){
        $referrer = User::where('referralCode',Auth::user()->referrerCode)->first();
        }else{
            $referrer = null;
        }
        return view('client.profile',['referrer'=>$referrer]);
    }

    public function updateProfile(Request $request){
        //dd([$request->oldPassword,Hash::make($request->oldPassword),Auth::user()->password]);
        if($request->has('form1')){
            if(Hash::check($request->oldPassword, Auth::user()->password)){
                if($request->newPasword===$request->confirmNewPassword){
                    Auth::user()->password = Hash::make($newPassword);
                    Auth::user()->save();
                    return back()->with('success', 'Password was reset!');
                }else{
                return back()->with('error', 'Password does not match');
                }
            }else{
                return back()->with('error', 'Password reset was unsuccessful, incorrect password entered');
            }
        }
        else if($request->has('form2')){
            if($request->hasFile('kyc')){
                Auth::user()->kycUrl = $request->file('kyc')->store('kyc',['disk'=>'public']);
                Auth::user()->save();
                return back()->with('success', 'KYC uploaded was successfully sent!');
                }else{
                    return back()->with('error', 'File not uploaded');
                }
        }
    }
}
