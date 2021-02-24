<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'balance',
        'totalInvested',
        'totalPayout',
        'country',
        'isAdmin',
        'isPro',
        'referralCode',
        'referrerCode',
        'trader_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function trades()
    {
        return $this->hasMany('App\Model\Trade', 'user_id');
    }

    public function withdrawals()
    {
        return $this->hasMany('App\Model\Withdrawal', 'user_id');
    }
    
    public function deposits()
    {
        return $this->hasMany('App\Model\Deposit', 'user_id');
    }

    public function trader()
    {
        return $this->belongsTo('App\Models\Trader');
    }
    
    public function referral()
    {
        $referral = User::where('referralCode',$this->referrerCode)->first();
        return $referral;
    }
    
    public function referred()
    {
        $referred = User::where('referrerCode',$this->referralCode)->get();
        return $referred;
    }
}
