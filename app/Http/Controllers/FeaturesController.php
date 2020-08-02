<?php

namespace App\Http\Controllers;

use App\Features;
use App\Http\Requests\FeaturesRequest;
use Illuminate\Http\Request;
use App\repository\CrudRepository;
class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud ,Features $featuresModel )
    {

        if(count($crud->getAllData($featuresModel))>0) {

            $data = $crud->getById($featuresModel, 1);
            return view('dashboard.dashboardpages.author_admin.features.update', compact('data'));
        }else{

            return view('dashboard.dashboardpages.author_admin.features.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,Features $featuresModel ,FeaturesRequest $req)
    {
        $crud->store($req,$featuresModel);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function show(Features $features)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function edit(Features $features)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRepository $crud,Features $featuresModel ,$id ,FeaturesRequest $request)
    {

        $crud->update($request,$id,$featuresModel);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function destroy(Features $features)
    {
        //
    }
}
