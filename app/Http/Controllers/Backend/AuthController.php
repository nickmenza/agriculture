<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

use Session;
use Hash;

class AuthController extends Controller
{
    public function __construct() {
        $this->path = 'backend.auth';
        $this->view_path = 'auth';
        $this->route_name = 'admin';
    }

    public function index(){
        $path = $this->path;
        $view_path = $this->view_path;

        return view($this->path.'.index', compact(
            'path',
            'view_path'
        ));
    }

    public function post(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        $collection = collect([
            ['username' => 'admin', 'password' => 'rdkaset1234'],
        ]);

        $collection = $collection
            ->Where('username',$email)
            ->firstWhere('password',$password);
        
        if($collection){
            Session::put('username', $collection['username']);
            return redirect(route($this->route_name.'.banner.index'));
        }else{
            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::forget('username');
        return redirect(route($this->route_name.'.login'));
    }

    
}
