<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MissionRequest;
use App\model\Mission;

class MissionController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $mission =Mission::first();
        return view('admins.dashboardpages.author_admin.mission.edit' ,compact('mission'));
    }

    /**
     * @param MissionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MissionRequest $request)
    {

        $id = Mission::first()->id;
        Mission::where('id' ,$id ) ->update([
         'mission_ar' => $request -> mission_ar ,
         'mission_en' => $request -> mission_en ,
         'vission_ar' => $request -> vission_ar  ,
         'vission_en' => $request -> vission_en ,
    ]);
        return redirect()->back();

    }

}
