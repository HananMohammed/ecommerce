<?php

namespace App\Http\Controllers;

use App\Http\Requests\Seorequest;
use App\repository\CrudRepository;
use App\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Seo $seo , $id ,Seorequest $request

    public function index(CrudRepository $crud , Seo $modelseo)
    {
        $data= $crud->getAllData($modelseo);
        if(count($crud->getAllData($modelseo))>0) {
            return view('dashboard.dashboardpages.user_admin.seo.update')->with('data',$data);
        }else{
            return view('dashboard.dashboardpages.user_admin.seo.edit' );
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.seo.update');
    }


    public function store(Seorequest $request ,CrudRepository $crud , Seo $modelseo)
    {
        //

        $crud->store($request,$modelseo);
        return redirect()->route('dseo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function show(Seo $seo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function edit( )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Seorequest  $request
     * @param  SeoReposetry  $reposetry
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Seorequest $request,CrudRepository $crud ,$id ,Seo $modelSeo)
    {
        //

        $crud->update($request,$id ,$modelSeo);
        return redirect()->route('dseo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seo $seo)
    {
        //
    }
}
