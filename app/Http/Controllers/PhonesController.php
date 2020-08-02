<?php

namespace App\Http\Controllers;

use App\Http\Requests\Phone;
use App\Phones;
use App\repository\CrudRepository;
use App\repository\PhoneRepository;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud, Phones $ph)
    {
        $phoneArray =$crud->getAllData($ph);

        return view('dashboard.dashboardpages.author_admin.phone.phone',compact('phoneArray'));
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
     * @param  Phone  $request
     * @param PhoneRepository $phoneRepository
     * @return \Illuminate\Http\Response
     */
    public function store(Phone $request,CrudRepository $crud , Phones $ph)
    {
        //

        $crud->store($request,$ph );
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function show(Phones $phones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function edit(Phones $phones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phones $phones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudRepository $crud ,$id ,Phones $ph_model)
    {
        //
         $crud->delete($id ,$ph_model);
        return redirect()->back();
    }
}
