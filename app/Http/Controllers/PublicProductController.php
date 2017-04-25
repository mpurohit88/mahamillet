<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use App\Product;
use Illuminate\Http\Request;

class PublicProductController extends Controller
{
    public function category($id) {
        $cat = Category::where([['id', '=', $id], ['status', '=', '1']])->first();
        $scats = SubCategory::where([['cat_id', '=', $id],['status', '=', '1']])->get();
        $prods = Product::where([['cat_id', '=', $id],['status', '=', '1']])->paginate(15);
        return view('pproducts.category')->with(['cat' => $cat, 'scats' => $scats, 'prods' => $prods]);
    }

    public function subCategory($id) {
        $scat = SubCategory::where([['id', '=', $id], ['status', '=', '1']])->first();
        $cat = Category::where([['id', '=', $scat->cat_id], ['status', '=', '1']])->first();
        $scats = SubCategory::where([['cat_id', '=', $scat->cat_id],['status', '=', '1']])->get();
        $prods = Product::where([['scat_id', '=', $id],['status', '=', '1']])->paginate(15);
        return view('pproducts.subCategory')->with(['cat' => $cat, 'scat' => $scat, 'scats' => $scats, 'prods' => $prods]);
    }
}
