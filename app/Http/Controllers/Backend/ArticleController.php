<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class ArticleController extends Controller
{
    public function __construct() {
        $this->path = 'backend.article';
        $this->view_path = 'auth';
        $this->title = 'ข่าวสารและกิจกรรม';
        $this->route_name = 'admin.article';
        $this->model = 'App\Models\Article';
        $this->search_fields = ['article_name','date'];
    }
    
    public function index(Request $request){
        // check type
        if($request->has('article_type')){
            session()->put('article_type',$request->article_type);
        }
        $path = $this->path;
        $view_path = $this->view_path;
        $title = $this->title;
        $route_name = $this->route_name;
        $model = new $this->model;
        if($request->has('article_type')){
            session()->put('article_type',$request->article_type);
        }
        if(session()->has('article_type')){
            $model = $model->where('type',session()->get('article_type'));
        }

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
        $data['type'] = session()->get('article_type');
        if ($request->hasFile('images')) {
            $images = Storage::disk('uploads')->put('/article', $request->images);
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
            $images = Storage::disk('uploads')->put('/article', $request->images);
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
