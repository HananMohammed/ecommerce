<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\AddressRequest;
use App\repository\AddressRepository;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud,Address $add )
    {

        //$address=new AddressRepository();
        $addressArray=$crud->getAllData($add);

        return view('dashboard.dashboardpages.author_admin.address.address',compact('addressArray'));

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
     * @param  AddressRequest  $request
     * @param AddressRepository $addressRepository
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request, CrudRepository $crud,Address $add)
    {
        //
        $crud->store($request,$add);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @param AddressRepository $addressRepository
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ,CrudRepository $crud ,Address $add)
    {
        //
        $crud->delete($id,$add);
        return redirect()->back();
    }
}
