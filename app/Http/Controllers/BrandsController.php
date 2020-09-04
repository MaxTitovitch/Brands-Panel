<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\AffiliateProgram;

class BrandsController extends Controller
{

    public function index(Request $request) {
        return $this->prepareBrandsPage($request, false);
    }

    public function indexAffiliate(Request $request) {
        return $this->prepareBrandsPage($request, true);
    }

    public function show ($id) {
        return $this->prepareBrandPage($id, 'user-welcome', 'brand');
    }

    public function showAffiliate ($id) {
        return $this->prepareBrandPage(AffiliateProgram::find($id)->brand->id, 'user-affiliate-one', 'affiliate');
    }


    private function prepareBrandsPage($request, $detail) {
        $sort = $request->sort ?? 'id';
        $query = $request->search ?? null;
        if(!$query) {
            $brands = Brand::orderBy($sort)->paginate(100);
        } else {
            $brands = Brand::where('name', 'like', "%$query%")->orderBy($sort)->paginate(25);
        }
        $brands->withPath($request->getRequestUri());

        return view('welcome', ['brands' => $brands, 'sort' => $sort, 'search' => $query, 'detail' => $detail]);
    }

    private function prepareBrandPage($id, $path, $view) {
        $brand = Brand::find($id);
        if($brand) {
            return view($view, ['brand' => $brand]);
        } else {
            return redirect()->route($path);
        }
    }
}
