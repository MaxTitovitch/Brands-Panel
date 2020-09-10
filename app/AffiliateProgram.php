<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AffiliateProgram extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function programValues() {
        return $this->hasMany('App\ProgramValue');
    }

    public static function findBySlug($slug) {
        $slug = str_replace('1', '\'', $slug);
        $parts = explode('-', $slug); $sameBrands = null;

        for ($i = 0; $i < count($parts); $i++) {
            if($i == 0) {
                $sameBrands = Brand::whereRaw('`name` LIKE "%' . $parts[$i] . '%"');
            } else {
                $sameBrands = $sameBrands->whereRaw('`name` LIKE \'%' . $parts[$i] . '%\'');
            }
        }
        $brands = $sameBrands->orderBy('id')->get();
        foreach ($brands as $brand) {
            if(mb_strtolower(str_replace('1', '\'',Str::slug(str_replace('\'', '1', $brand->name)))) == mb_strtolower ($slug)){
                return $brand->affiliateProgram;
            }
        }
    }
}
