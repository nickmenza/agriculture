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
        $this->GET_SEO(6);
        
    }

    public function index(){
        $ag = Article::select()->where('type',3)->orderBy('date','desc')->get();
        return view('frontend.ag',compact('ag'));
    }
    
}
