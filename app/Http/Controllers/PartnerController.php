<?php

namespace App\Http\Controllers;

use App\Partner;
use App\repository\CrudRepository;
use Illuminate\Http\Request;
use App\Http\Requests\PartnersRequest;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(  CrudRepository $crud ,Partner $partner )
    {
        $data = $crud->getAllData($partner);
        return view('dashboard.dashboardpages.partners.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.partners.edit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,Partner $partner ,PartnersRequest $request)
    {

        $crud->store($request,$partner);
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id ,CrudRepository $crud ,Partner $modelname )
    {
        $data=$crud->getById($modelname,$id);
       return view('dashboard.dashboardpages.partners.update',compact('data'));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update( $id , CrudRepository $crud ,Partner $partnermodel ,PartnersRequest $request)
    {
        $crud->update($request,$id,$partnermodel);
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id ,  Partner $pModel , CrudRepository $crud )
    {
        $crud->delete($id,$pModel);
        return redirect()->back();
    }
}
