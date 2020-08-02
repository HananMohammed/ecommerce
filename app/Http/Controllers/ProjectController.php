<?php

namespace App\Http\Controllers;

use App\category;
use App\Http\Requests\ProjectReq;
use App\Project;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,Project $model)
    {
        $data=$crud->getAllData($model);
        return view('dashboard.dashboardpages.author_admin.projects.index')->with('data',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category =category::all();
        return view('dashboard.dashboardpages.author_admin.projects.edit',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud , ProjectReq $req ,Project $model)
    {
        $crud->store($req,$model);
        return redirect()->route('dproject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudRepository $crud ,Project $model ,$id )
    {
        $data=$crud->getById($model ,$id );
        $category =category::all();
        return view('dashboard.dashboardpages.author_admin.projects.update',compact('data','category')) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRepository $crud ,Project $model ,$id  ,ProjectReq $req)
    {
        $crud->update($req,$id,$model);
        return redirect()->route('dproject.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudRepository $crud ,Project $model ,$id )
    {
         $crud->delete($id,$model);
         return redirect()->route('dproject.index');
    }
}
