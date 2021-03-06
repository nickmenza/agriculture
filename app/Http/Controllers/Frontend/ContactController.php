<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contact;


class ContactController extends Controller
{
    public function __construct() {
        $this->GET_SEO(9);
    }

    public function index(){
        return view('frontend.contact');
    }

    public function post(Request $request){
        $data = $request->except('_token');
        Contact::create($data);
        \Mail::send('mail.contact', ['request' => $request], function ($m) use($request) {
            $m->to('marketing_hq1@rdkaset.com')->subject($request->subject);
        });
        return redirect()->back();
    }
    
}
