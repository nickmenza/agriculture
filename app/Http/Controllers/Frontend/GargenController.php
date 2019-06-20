<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Article;

class GargenController extends Controller
{
    public function __construct() {
        
    }

    public function index(){
        $garden = Article::select()->where('type',2)->orderBy('date','desc')->get();
        return view('frontend.gardening',compact('garden'));
    }

    public function detail($id,$name){
        $garden = Article::select()->where('type',2)->limit(3)->orderBy('date','desc')->get();
        $data = Article::find($id);
        if(!$data){
            return redirect()->back();
        }
        return view('frontend.gardening-detail',compact('data','garden'));
    }
    
}
