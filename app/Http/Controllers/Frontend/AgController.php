<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Article;

class AgController extends Controller
{
    public function __construct() {
        
    }

    public function index(){
        $ag = Article::select()->where('type',3)->orderBy('id','desc')->get();
        return view('frontend.ag',compact('ag'));
    }
    
}
