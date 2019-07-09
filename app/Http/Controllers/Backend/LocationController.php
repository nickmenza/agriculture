<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class LocationController extends Controller
{
    public function __construct() {
        $this->path = 'backend.location';
        $this->view_path = 'auth';
        $this->title = 'ศูนย์กล้าปาล์มน้ำมัน';
        $this->route_name = 'admin.location';
        $this->model = 'App\Models\Location';
        $this->search_fields = ['title','location','phone','email'];

    }
    
    public function index(Request $request){
        $path = $this->path;
        $view_path = $this->view_path;
        $title = $this->title;
        $route_name = $this->route_name;
        $model = new $this->model;
        if($request->has('search')){
            $model = $model->where(function($query) use($request){
                foreach ($this->search_fields as $key => $value) {
                    $query->orWhere($value,'like','%'.$request->search.'%');
                }
            });
        }
        $data = $model->select()->paginate(config('global.page'));
        return view($this->path.'.index', compact(
            'path',
            'view_path',
            'title',
            'route_name',
            'data'
        ));
    }

    
    public function create()
    {
        $path = $this->path;
        $view_path = $this->view_path;
        $title = $this->title;
        $route_name = $this->route_name;
        $model = new $this->model;
        $data = $model;
        return view($this->path.'.update', compact(
            'path',
            'view_path',
            'title',
            'route_name',
            'data'
        ));
    }

    
    public function store(Request $request)
    {
        $model = new $this->model;
        $data = $request->except('_token','id');
        if ($request->hasFile('images')) {
            $images = Storage::disk('uploads')->put('/product', $request->images);
            $data['images'] = $images;
        }
        $model->create($data);
        return redirect(route($this->route_name.'.index'));
    }

    
    public function show($id)
    {
    }

    
    public function edit($id)
    {
        $path = $this->path;
        $view_path = $this->view_path;
        $title = $this->title;
        $route_name = $this->route_name;
        $model = new $this->model;
        $data = $model->find($id);
        if(empty($data)){
            return redirect(route($this->route_name.'.index'));
        }
        return view($this->path.'.update', compact(
            'path',
            'view_path',
            'title',
            'route_name',
            'data',
            'id'
        ));
    }

    
    public function update(Request $request, $id)
    {
        $model = new $this->model;
        $data = $request->except('_token','id');
        if ($request->hasFile('images')) {
            $images = Storage::disk('uploads')->put('/product', $request->images);
            $data['images'] = $images;
        }
        $model->find($id)->update($data);
        return redirect(route($this->route_name.'.index'));
        
    }

    
    public function destroy($id)
    {
        $model = new $this->model;
        $model->find($id)->delete();
        return redirect(route($this->route_name.'.index'));
    }
}
