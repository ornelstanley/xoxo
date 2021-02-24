<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trader extends Model {
    protected $table = "traders";
    protected $guarded = [];
    public function users()
    {
        return $this->hasMany('App\Model\Users', 'trader_id');
    }
}
