<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Product;
use App\Models\Article;

class SearchController extends Controller
{
    public function __construct() {
        
    }

    public function index(){
        $garden = Article::select()->whereIn('type',[2,1]);
        if(Input::get('search')){
            $garden = $garden->where('article_name','like','%'.Input::get('search').'%');
        }
        $garden = $garden->orderBy('date','desc')->paginate(6);
        
        $products = Product::select();
        if(Input::get('search')){
            $products = $products->where(function($query){
                $query->Orwhere('product_name','like','%'.Input::get('search').'%');
                $query->Orwhere('product_name_en','like','%'.Input::get('search').'%');

            });

        }
        $products = $products->paginate(6);
        return view('frontend.search',compact('products','garden'));
    }

    
}
