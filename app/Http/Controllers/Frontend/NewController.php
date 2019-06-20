<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Article;


class NewController extends Controller
{
    public function __construct() {
        
    }

    public function index(){
        $news = Article::select()->where('type',1)->orderBy('date','desc')->get();
        return view('frontend.news',compact('news'));
    }

    public function detail($id,$name){
        $new = Article::select()->where('type',2)->limit(3)->orderBy('date','desc')->get();
        $data = Article::find($id);
        if(!$data){
            return redirect()->back();
        }
        return view('frontend.news-detail',compact('data','new'));
    }

}
