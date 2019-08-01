<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Location;

class LocationController extends Controller
{
    public function __construct() {
        $this->GET_SEO(7);
        
    }

    public function index(){
        $data = Location::select()->get();
        return view('frontend.location',compact('data'));
    }
    
}
