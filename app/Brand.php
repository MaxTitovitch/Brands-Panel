<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function ratings() {
        return $this->hasMany('App\Rating');
    }
}
