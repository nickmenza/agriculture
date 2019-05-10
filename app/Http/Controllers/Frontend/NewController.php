<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class NewController extends Controller
{
    public function __construct() {
        
    }

    public function index(){
        return view('frontend.news');
    }

    public function detail(){
        return view('frontend.news-detail');
    }

}
