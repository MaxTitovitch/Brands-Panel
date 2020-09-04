<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    public function affiliateProgram()
    {
        return $this->belongsTo('App\AffiliateProgram');
    }
}
