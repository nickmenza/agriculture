<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class ProductController extends Controller
{
    public function __construct() {
        $this->path = 'backend.product';
        $this->view_path = 'auth';
        $this->title = 'ผลิตภัณฑ์';
        $this->route_name = 'admin.products';
        $this->model = 'App\Models\Product';
        $this->search_fields = ['product_name','product_name_en','product_name_old'];

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
        $model = $model->orderBy('sequence','asc');
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
            $image_file_name = \Helper::upload_file($request->file('images'),'product/');
            \Helper::upload_file($request->file('images'),'product/',300 ,str_replace('product/', '', $image_file_name));
            $data['images'] = $image_file_name;
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
            // $images = Storage::disk('uploads')->put('/product', $request->images);
            // $data['images'] = $images;
            $image_file_name = \Helper::upload_file($request->file('images'),'product/');
            \Helper::upload_file($request->file('images'),'product/',300 ,str_replace('product/', '', $image_file_name));
            $data['images'] = $image_file_name;
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

    public function sequence($id,Request $request){
        $new_model = new $this->model;
        $new_model = $new_model->find($id)->update([
            'sequence' => $request->sequence - 0.5
        ]);
        $model = new $this->model;
        $model = $model->orderBy('sequence','asc')->get();
        foreach ($model as $key => $value) {
            $value->sequence = $key+1;
            $value->save();
            # code...
        }
        return redirect(route($this->route_name.'.index'));
    }
}
