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
        

        $users = User::select()
        ->Where('email','=',$email)
        ->Where('password','=',$password)->first();

        if($users){
            Session::put('users_id', $users->users_id);
            return redirect('_admin/news');
        }else{
            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::put($this->path.'.users_id', '');
        Session::put($this->path.'.name', '');
        return redirect()->to($this->path.'/login');
    }

    
}
