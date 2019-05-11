<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class BannerController extends Controller
{
    public function __construct() {
        $this->path = 'backend.banner';
        $this->view_path = 'auth';
        $this->title = 'Banner';
        $this->route_name = 'admin.banner';
        $this->model = 'App\Models\Banner';
        $this->search_fields = ['banner_name','banner_name_en'];
        $this->list_type = [
            1 => 'home',
            2 => 'about',
            3 => 'news',
            4 => 'product',
            5 => 'garden',
            6 => 'agriculturist',
            7 => 'location',
            8 => 'career',
            9 => 'contact',
        ];
            

    }
    
    public function index(Request $request){
        $list_type = $this->list_type;
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
            'data',
            'list_type'
        ));
    }

    
    public function create()
    {
        $list_type = $this->list_type;
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
            'data',
            'list_type'
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
        $list_type = $this->list_type;
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
            'id',
            'list_type'
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
