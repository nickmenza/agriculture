<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CareerController extends Controller
{
    public function __construct() {
        
    }

    public function index(){
        return view('frontend.career');
    }
    
}
