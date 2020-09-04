<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramValue extends Model
{
    public function affiliateProgram()
    {
        return $this->belongsTo('App\AffiliateProgram');
    }

    public function programCategory()
    {
        return $this->belongsTo('App\ProgramCategory');
    }
}
