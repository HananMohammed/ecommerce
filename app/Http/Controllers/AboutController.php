<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Requests\AboutUs;
use App\interfaces\CrudInterface;
use App\repository\AboutUsRepositry;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class AboutController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud,About $about)
    {
        //
        //  $aboutData=new AboutUsRepositry();

        if(count($crud->getAllData($about))>0){

            $aboutarray=$crud->getById($about,1);
            return view('dashboard.dashboardpages.author_admin.about.aboutedit',compact('aboutarray'));
        }else{
            // dd('index');
            return view('dashboard.dashboardpages.author_admin.about.about');
        };

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(  )
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param AboutUsRepositry $aboutusreopositry
     * @return \Illuminate\Http\Response
     */
    public function store(AboutUs $request, CrudRepository $crud,About $about)
    {
        //
        // dd($request);
        $crud->store($request,$about);
        return redirect()->back();

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show( CrudRepository $crud ,About $about)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AboutUs  $request
     * @param  \App\About  $id
     * @param AboutUsRepositry $aboutusreopositry
     * @return \Illuminate\Http\Response
     */

    public function update(AboutUs $request,  CrudRepository $crud,About $about ,$id)
    {
        //
        $crud->update($request,$id,$about);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
