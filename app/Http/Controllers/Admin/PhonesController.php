<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneRequest;
use App\model\Phones;
use App\interfaces_Implementation\StoreAndUpdateImp ;

class PhonesController extends Controller
{
    private $phone ;
    private $storeAndUpdate ;

    /**
     * PhonesController constructor.
     * @param Phones $phone
     * @param StoreAndUpdateImp $storeAndUpdate
     */
    public function __construct(Phones $phone ,StoreAndUpdateImp $storeAndUpdate)
    {
        $this->phone = $phone ;
        $this->storeAndUpdate = $storeAndUpdate ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone = $this->phone->all();

        return view('admins.dashboardpages.author_admin.phone.index',compact('phone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PhoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhoneRequest $request)
    {
        $this->storeAndUpdate->store($request , $this->phone) ;
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $this->phone->where('id' , $id)->delete();

         return redirect()->back();
    }
}
