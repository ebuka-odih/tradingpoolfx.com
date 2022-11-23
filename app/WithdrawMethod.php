<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawMethod extends Model
{
    protected $guarded = [];

    public function status()
    {
        if ($this->status == 1){
            return "Active";
        }
        return "Not Active";
    }
}
