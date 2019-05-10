<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticalController extends Controller
{
    public function __construct() {
        $this->path = 'backend.artical';
        $this->view_path = 'auth';
        $this->title = 'ข่าวสารและกิจกรรม';
        $this->route_name = 'admin.news';

    }
    
    public function index(){
        $path = $this->path;
        $view_path = $this->view_path;
        $title = $this->title;
        $route_name = $this->route_name;
        return view($this->path.'.index', compact(
            'path',
            'view_path',
            'title',
            'route_name'
        ));
    }

    
    public function create()
    {
        $path = $this->path;
        $view_path = $this->view_path;
        $title = $this->title;
        $route_name = $this->route_name;
        return view($this->path.'.update', compact(
            'path',
            'view_path',
            'title',
            'route_name'
        ));
    }

    
    public function store(Request $request)
    {
        $id = $request->id;
        if($id){

        }else{
            $data = $request->except('_token','id');
            $data['type'] = 1;
            // return $data;
            Article::create($data);
        }

        return redirect(route($this->route_name.'.index'));
    }

    
    public function show($id)
    {
    }

    
    public function edit($id)
    {
    }

    
    public function update(Request $request, $id)
    {
    }

    
    public function destroy($id)
    {
        //
    }
}
