<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\AffiliateProgram;
use Illuminate\Support\Str;

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

    public function showAffiliate ($slug) {
        $slug = str_replace('-affiliate-programs','', $slug);
        return $this->prepareBrandPage(AffiliateProgram::findBySlug($slug)->brand->id, 'user-affiliate-one', 'affiliate');
    }

    public function indexAffiliatePrint () {
        $affiliateProgram = AffiliateProgram::all();
        header('Content-type: application/txt');
        header('Content-Disposition: attachment; filename="result.csv"');

        foreach ($affiliateProgram as $program) {
            echo 'http://scalechannel.com/questions/' . Str::slug(str_replace('\'', '1', $program->brand->name)) . ';' . $program->brand->name . "\r\n";
        }
    }

    private function prepareBrandsPage($request, $detail) {
        $sort = $request->sort ?? 'id';
        $query = $request->search ?? null;
        if(!$query) {
            $brands = Brand::orderBy($sort)->paginate(100);
        } else {
            $brands = Brand::where('name', 'like', "%$query%")->orderBy($sort)->paginate(25);
        }
        $brands->withPath(preg_replace('/\&*page=\d+/i', '', $request->getRequestUri()));

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
