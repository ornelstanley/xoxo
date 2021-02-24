<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model {
    protected $table = "trades";
    protected $guarded = [];

    public function trader()
    {
        return $this->belongsTo('App\Models\Trader','trader_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
