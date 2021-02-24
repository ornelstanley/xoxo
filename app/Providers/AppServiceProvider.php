<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Settings;
use App\Models\Trader;
use App\Models\Withdrawal;
use App\Models\Trade;
use App\Models\User;
use App\Models\Deposit;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::composer('*', function($view){
                //
                $data['set']=Settings::first();
                $data['traders']=Trader::all();
                $data['trades']=Trade::all();
                $data['users']=User::all();
                $data['deposits']=Deposit::all();
                $data['withdrawals']=Withdrawal::all();
                View::share($data);
        });
    }
}
