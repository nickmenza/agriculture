<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Product;


class ProductController extends Controller
{
    public function __construct() {
        $this->GET_SEO(4);
        
    }

    public function index(){
        $products = Product::select()->orderBy('sequence','asc')->paginate(18);
        return view('frontend.product',compact('products'));
    }

    public function detail($id,$name){
        $products = Product::select()->orderBy('id','desc')->limit(4)->get();
        $data = Product::find($id);
        if(!$data){
            return redirect()->back();
        }
        return view('frontend.product-detail',compact('products','data'));
    }
    
}
