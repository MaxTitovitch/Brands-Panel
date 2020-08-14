<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
    public function index () {
        $brands = Brand::withCount('ratings')->paginate(25);
        return view('welcome', ['brands' => $brands]);
    }

    public function show ($id) {
        $brand = Brand::find($id);
        if($brand) {
            return view('brand', ['brand' => $brand]);
        } else {
            return redirect()->route('user-welcome');
        }
    }
}
