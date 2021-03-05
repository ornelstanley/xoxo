<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trader;
use App\Models\Trade;
use App\Models\Withdrawal;
use App\Models\Settings;
use App\Models\Deposit;

class AdminController extends Controller
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
        return view('admin.users');
    }

    public function traders()
    {
        return view('admin.traders');
    }

    public function trades()
    {
        return view('admin.trades');
    }
    
    public function deposits()
    {
        return view('admin.deposits');
    }
    public function settings()
    {
        return view('admin.settings');
    }

    public function postSettings(Request $request)
    {
        $set = Settings::first();
        $set['phoneNo'] = $request->phoneNo;
        $set['email'] = $request->email;
        $set['bitcoinAddress'] = $request->bitcoinAddress;
        $set['ethereumAddress'] = $request->ethereumAddress;
        $set['bitcoinCashAddress'] = $request->bitcoinCashAddress;
        $set['tetherAddress'] = $request->tetherAddress;
        $set['address'] = $request->address;
        $set['faq'] = $request->faq;
        $set['slotOpen'] = $request->has('slotOpen')?true:false;
        if($request->hasFile('kyc')){
        $set['document_1'] = $request->file('document_1')->store('kyc',['disk'=>'public']);
        }
        $set['announcement'] = $request->announcement;
        $set->save();
        return back()->with('success', 'Settings was Successfully updated!');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.edituser',['user'=>$user,'id'=>$id]);
    }

    public function postEditUser(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'balance' => 'required',
            'totalInvested' => 'required',
            'totalPayout' => 'required',
            'kycStatus' => 'required'
        ]);
        $user = User::find($id);
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['country'] = $request->country;
        $user['balance'] = $request->balance;
        $user['kycStatus'] = $request->kycStatus;
        $user['totalInvested'] = $request->totalInvested;
        $user['totalPayout'] = $request->totalPayout;
        $user['isPro'] = $request->has('isPro')?true:false;
        $user['trader_id'] = $request->trader;
        $user['current_entry'] = $request->current_entry;
        $user['entry_balance'] = $request->entry_balance;
        $user['profit'] = $request->profit;
        $user['pending_deposit'] = $request->pending_deposit;
        $user['pending_withdrawal'] = $request->pending_withdrawal;
        Trade::where('user_id',$id)->update(['trader_id'=>$request->trader]);
        $user->save();
        return back()->with('success', 'User was Successfully updated!');
    }
    
    public function deleteUser($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users');
    }
    public function deleteTraders($id)
    {
        Trader::find($id)->delete();
        return redirect()->route('admin.traders');
    }
    public function deleteWithdrawals($id)
    {
        Withdrawal::find($id)->delete();
        return redirect()->route('admin.trades');
    }
    public function deleteDeposits($id)
    {
        Deposit::find($id)->delete();
        return redirect()->route('admin.trades');
    }
    public function deleteTrades($id)
    {
        Trade::find($id)->delete();
        return redirect()->route('admin.trades');
    }
    public function createNewUserTrade($id){
        
        $user = User::find($id);
        return view('admin.newtrade',['user'=>$user,'id'=>$id]);
    }

    public function postCreateNewUserTrade(Request $request, $id)
    {
        $trade['user_id'] = $id;
        $trade['trader_id'] = $request->trader;
        $trade['amount'] = $request->amount;
        $trade['plan'] = $request->plan;
        $trade['return'] = $request->return;
        Trade::create($trade);
        return back()->with('success', 'New Trade created for user!');
    }

    public function editTrades($id)
    {
        $trade = Trade::find($id);
        return view('admin.edittrades',['trade'=>$trade]);
    }

    public function postEditTrades(Request $request, $id)
    {
        $trade = Trade::find($id);
        $trade['trader_id'] = $request->trader;
        $trade['amount'] = $request->amount;
        $trade['plan'] = $request->plan;
        $trade['return'] = $request->return;
        $trade->save();
        return back()->with('success', 'Trade was successfully updated!');
    }

    public function createNewTraders(){
        return view('admin.newtrader');
    }

    public function postCreateNewTraders(Request $request)
    {
        $request->validate([
            'profile' => 'required',
            'name' => 'required',
            'origin' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'verification' => 'required',
            'tradingLevel' => 'required',
            'returns' => 'required',
            'ranking' => 'required',
            'expertise' => 'required'
        ]);
        $trader['name'] = $request->name;
        $trader['origin'] = $request->origin;
        $trader['dob'] = date('Y-m-d',strtotime($request->dob));
        $trader['address'] = $request->address;
        $trader['verification'] = $request->verification;
        $trader['tradingLevel'] = $request->tradingLevel;
        $trader['returns'] = $request->returns;
        $trader['ranking'] = $request->ranking;
        $trader['expertise'] = $request->expertise;
        $trader['profileUrl'] = $request->file('profile')->store('traders',['disk'=>'public']);
        Trader::create($trader);
        return back()->with('success', 'New Trader was Successfully created!');
    
    }

    public function editTraders($id)
    {
        $trader = Trader::find($id);
        return view('admin.edittrader',['trader'=>$trader,'id'=>$id]);
    }

    public function postEditTraders(Request $request, $id)
    {
        
        $trader = Trader::find($id);
        if($request->has('form2')){
            $request->validate([
                'janReturns' => 'required',
                'febReturns' => 'required',
                'marReturns' => 'required',
                'aprReturns' => 'required',
                'mayReturns' => 'required',
                'junReturns' => 'required',
                'julReturns' => 'required',
                'augReturns' => 'required',
                'sepReturns' => 'required',
                'octReturns' => 'required',
                'novReturns' => 'required',
                'decReturns' => 'required',
                'janName' => 'required',
                'febName' => 'required',
                'marName' => 'required',
                'aprName' => 'required',
                'mayName' => 'required',
                'junName' => 'required',
                'julName' => 'required',
                'augName' => 'required',
                'sepName' => 'required',
                'octName' => 'required',
                'novName' => 'required',
                'decName' => 'required',
            ]);

            $trader['janReturns'] = $request->janReturns;
            $trader['febReturns'] = $request->febReturns;
            $trader['marReturns'] = $request->marReturns;
            $trader['aprReturns'] = $request->aprReturns;
            $trader['mayReturns'] = $request->mayReturns;
            $trader['junReturns'] = $request->junReturns;
            $trader['julReturns'] = $request->julReturns;
            $trader['augReturns'] = $request->augReturns;
            $trader['sepReturns'] = $request->sepReturns;
            $trader['octReturns'] = $request->octReturns;
            $trader['novReturns'] = $request->novReturns;
            $trader['decReturns'] = $request->decReturns;
            $trader['janName'] = $request->janName;
            $trader['febName'] = $request->febName;
            $trader['marName'] = $request->marName;
            $trader['aprName'] = $request->aprName;
            $trader['mayName'] = $request->mayName;
            $trader['junName'] = $request->junName;
            $trader['julName'] = $request->julName;
            $trader['augName'] = $request->augName;
            $trader['sepName'] = $request->sepName;
            $trader['octName'] = $request->octName;
            $trader['novName'] = $request->novName;
            $trader['decName'] = $request->decName;
           $trader->save();
            return back()->with('success', 'Trader was Successfully updated!');
        }
        if($request->has('form1')){
        
        $trader['name'] = $request->name;
        $trader['origin'] = $request->origin;
        $trader['dob'] = date('Y-m-d',strtotime($request->dob));
        $trader['address'] = $request->address;
        $trader['verification'] = $request->verification;
        $trader['tradingLevel'] = $request->tradingLevel;
        $trader['returns'] = $request->returns;
        $trader['lastWeekReturn'] = $request->lastWeekReturn;
        $trader['ranking'] = $request->ranking;
        $trader['expertise'] = $request->expertise;
        $trader['phoneNo'] = $request->phoneNo;
        $trader['contactLink'] = $request->contactLink;
        $trader['uid'] = $request->uid; 
        if($request->hasFile('traderReport')){
        $trader['traderReport'] = $request->file('traderReport')->store('kyc',['disk'=>'public']);
        }
        $trader['traderReportMonth'] = $request->traderReportMonth;
        $trader['totalClients'] = $request->totalClients;
        $trader['totalTradingVolume'] = $request->totalTradingVolume;
        $trader['totalTradingVolumeDate'] = $request->totalTradingVolumeDate;
        $trader['totalTurnover'] = $request->totalTurnover;
        $trader['totalTurnoverDate'] = $request->totalTurnoverDate;
        
        if($request->hasFile('profile')){
        $trader['profileUrl'] = $request->file('profile')->store('traders',['disk'=>'public']);
        }
        $trader->save();
        return back()->with('success', 'Trader was Successfully updated!');}
    }

    public function editWithdrawals($id)
    {
        $withdrawal = Withdrawal::find($id);
        return view('admin.editwithdrawals',['withdrawal'=>$withdrawal]);
    }

    public function postEditWithdrawals(Request $request, $id)
    {
        $withdrawal = Withdrawal::find($id);
        $withdrawal['amount'] = $request->amount;
        $withdrawal['crypto'] = $request->crypto;
        $withdrawal['bitcoinAddress'] = $request->bitcoinAddress;
        $withdrawal['status'] = $request->status;
        $withdrawal->save();
        return back()->with('success', 'Withdrawal was Successfully updated!');
    }
    
     public function editDeposits($id)
    {
        $deposit = Deposit::find($id);
        return view('admin.editdeposit',['deposit'=>$deposit]);
    }

    public function postEditDeposits(Request $request, $id)
    {
        $deposit = Deposit::find($id);
        $deposit['amount'] = $request->amount;
        $deposit['crypto'] = $request->crypto;
        $deposit['status'] = $request->status;
        $deposit->save();
        return back()->with('success', 'Deposit was Successfully updated!');
    }
}
