<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Career;

class CareerController extends Controller
{
    public function __construct() {
        
    }

    public function index(){
        $data = Career::select()->get();
        return view('frontend.career',compact('data'));
    }
    
}
