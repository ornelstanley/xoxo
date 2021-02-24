<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model {
    protected $table = "withdrawals";
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
