<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Article;

class HomeController extends Controller
{
    public function __construct() {
    }

    public function index(){
        $garden = Article::select()->where('type',2)->limit(3)->get();
        return view('frontend.home',compact('garden'));
    }
    
}