<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AboutusController extends Controller
{
    public function __construct() {
        $this->GET_SEO(2);
        
    }

    public function index(){
        return view('frontend.about-us');
    }
    
}
