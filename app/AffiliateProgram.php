<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateProgram extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function programValues() {
        return $this->hasMany('App\ProgramValue');
    }
}
