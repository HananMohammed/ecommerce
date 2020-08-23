<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MissionRequest;
use App\model\Mission;
use App\interfaces_Implementation\StoreAndUpdateImp;

class MissionController extends Controller
{
    private $update ;
    private $model ;

    /**
     * MissionController constructor.
     * @param StoreAndUpdateImp $update
     * @param Mission $model
     */
    public function __construct(StoreAndUpdateImp $update , Mission $model)
    {
        $this->update = $update ;
        $this->model  = $model  ;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $mission =$this->model->first();

        return view('admins.author_admin.mission.edit' ,compact('mission'));
    }

    /**
     * @param MissionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MissionRequest $request)
    {
        $id = $this->model->first()->id;

        $this->update->update($id ,$request ,$this->model->first());

        return redirect()->back();

    }

}
