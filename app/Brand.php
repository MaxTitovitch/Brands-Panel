<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function contacts() {
        return $this->hasMany('App\Contact');
    }

    public function ratings() {
        return $this->hasMany('App\Rating');
    }

    public function faqs() {
        return $this->hasMany('App\Faq');
    }

    public function scorecards() {
        return $this->hasMany('App\Scorecard');
    }

    public function statistics() {
        return $this->hasMany('App\Statistic');
    }

    public function strengths() {
        return $this->hasMany('App\Strength');
    }

    public function affiliateProgram()
    {
        return $this->hasOne('App\AffiliateProgram');
    }
}
