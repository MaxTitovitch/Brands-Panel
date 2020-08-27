<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
    public function index (Request $request) {
        $sort = $request->sort ?? 'id';
        $query = $request->search ?? null;
        if(!$query) {
            $brands = Brand::orderBy($sort)->paginate(100);
        } else {
            $brands = Brand::where('name', 'like', "%$query%")->orderBy($sort)->paginate(25);
        }
        $brands->withPath($request->getRequestUri());

        return view('welcome', ['brands' => $brands, 'sort' => $sort, 'search' => $query]);
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
