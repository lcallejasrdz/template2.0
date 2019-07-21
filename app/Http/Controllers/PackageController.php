<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str as Str;
use App\Http\Requests\PackageRequest as MasterRequest;
use App\Package as MasterModel;
use App\ViewPackage as MasterViewModel;
use Sentinel;
use Redirect;
use Illuminate\Support\Facades\DB;
use File;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('permissionsPackage');
        
        $this->active = "packages";
        $this->model = "Package";
        $this->view = "";
        $this->select = [
            'id',
            'name',
            'created_at'
        ];
        // 1 = all
        // 2 = only
        // 3 = exeptions
        $this->request_whit = 1;
        $this->only = [
        ];
        $this->exeptions = [
        ];
        $this->compact = ['word', 'active', 'model', 'view', 'columns', 'select', 'actions'];

        //Catalogs
    }

    public function columns()
    {
        $columns = [
            trans('validation.attributes.id'),
            trans('validation.attributes.name'),
            trans('validation.attributes.created_at'),
            trans('validation.attributes.actions')
        ];

        return $columns;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = $this->active;
        $model = $this->model;
        $view = 'index';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        // 1 = (show, edit, delete)
        // 2 = (show, edit)
        // 3 = (show, delete)
        // 4 = (edit, delete)
        // 5 = (show)
        // 6 = (edit)
        // 7 = (delete)
        $actions = 1;

        return view('admin.index', compact($this->compact));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = $this->active;
        $model = $this->model;
        $view = $this->view;
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        $actions = 0;

        // Catalogs

        return view('admin.create', compact($this->compact));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterRequest $request)
    {
        /* Create Item */
        if($this->request_whit == 1){
            $item = MasterModel::create($request->all());
        }else if($this->request_whit == 2){
            $item = MasterModel::create($request->only($this->only));
        }else{
            $item = MasterModel::create($request->except($this->exeptions));
        }

        /* Extras */
        // $item = $this->addExtras($request, $item);

        /* Slug */
        $item->slug = Str::slug($item->name);

        if($item->save()){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.create.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.create.error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = MasterViewModel::find($id);

        $active = $this->active;
        $model = null;
        $view = null;
        $columns = null;
        $select = null;
        $actions = null;
        $word = trans('module_'.$this->active.'.module_title');

        // Catalogs

        return view('admin.show', compact($this->compact, 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = MasterModel::find($id);

        $active = $this->active;
        $model = $this->model;
        $view = null;
        $columns = $this->columns();
        $select = $this->select;
        $actions = null;
        $word = trans('module_'.$this->active.'.module_title');

        // Catalogs

        return view('admin.edit', compact($this->compact, 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MasterRequest $request, $id)
    {
        $item = MasterModel::find($id);

        if($this->request_whit == 1){
            $item->fill($request->all());
        }else if($this->request_whit == 2){
            $item->fill($request->only($this->only));
        }else{
            $item->fill($request->except($this->exeptions));
        }

        /*
         * Extras
         */

        /* Slug */
        $item->slug = Str::slug($item->name);

        if($item->save()){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.update.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.update.error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterRequest $request)
    {
        if(MasterModel::destroy($request->id)){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.delete.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.delete.error'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRestore()
    {
        $active = $this->active;
        $model = $this->model;
        $view = 'delete';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        $actions = 1;

        return view('admin.deleted', compact($this->compact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postRestore(Request $request)
    {
        $item = MasterModel::onlyTrashed()->find($request->id);

        if($item->restore()){
            return Redirect::route($this->active.'.deleted')->with('success', trans('module_'.$this->active.'.crud.restore.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.restore.error'));
        }
    }
}
