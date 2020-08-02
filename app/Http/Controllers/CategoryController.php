<?php

namespace App\Http\Controllers;

use App\Category;
use App\repository\CrudRepository;
use Illuminate\Http\Request;
 use App\Http\Requests\CategoryReq;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,Category $catModel)
    {
         $data =   $crud->getAllData($catModel);
         return view('dashboard.dashboardpages.author_admin.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.author_admin.category.edit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,Category $model ,CategoryReq $request)
    {
        $crud->store($request,$model);
        $data =$crud->getAllData($model);
        return view('dashboard.dashboardpages.author_admin.category.index',compact('data'));    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit( $id, CrudRepository $crud ,Category $modelname)
    {
        $data= $crud->getById( $modelname,$id) ;

        return view('dashboard.dashboardpages.author_admin.category.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRepository $crud,Category $modelname ,CategoryReq $req ,$id)
    {
        $crud->update($req,$id , $modelname);
        $data = $crud->getAllData($modelname);
        return view('dashboard.dashboardpages.author_admin.category.index' , compact('data'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category ,CrudRepository $crud ,$id )
    {
        $crud->delete($id ,$category);
        return redirect()->back();
    }
}
