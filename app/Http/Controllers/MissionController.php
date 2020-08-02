<?php

namespace App\Http\Controllers;
use App\repository\CrudRepository;
use App\Mission;
use App\repository\Missionrepositry;
 use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud,Mission $mission  )
    {

        {

                $mission_repo=$crud->getAllData($mission);
            $missionarray = $crud->getById($mission,1);
              if(count($mission_repo)>0){

                 return view('dashboard.dashboardpages.author_admin.mission.missionedit',compact('missionarray'));

             }else{

                 return view('dashboard.dashboardpages.author_admin.mission.mission');

             }
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
     * @param  \App\Http\Requests\Mission $request
     * @param Missionrepositry $missionrepositry
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Mission $request,CrudRepository $crud,Mission $mission  )
    {
         $crud->store($request,$mission);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Mission $request
     * @param Missionrepositry $missionrepositry
     * @param  \App\Mission  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Mission $request, CrudRepository $crud,Mission $mission, $id)
    {
        //
            $crud->update($request,$id,$mission);
         return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }
}
