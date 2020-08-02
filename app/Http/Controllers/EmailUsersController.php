<?php

namespace App\Http\Controllers;

use App\EmailUsers;
use Illuminate\Http\Request;
use App\repository\CrudRepository;
use App\Http\Requests\MailUsersR;

class EmailUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud,EmailUsers $modile)
    {
        //
        if(count($crud->getAllData($modile))>0){

            $emaildata=$crud->getById($modile,1);

            return view('dashboard.dashboardpages.admin.emailUser.update',compact('emaildata'));
        }else{

            return view('dashboard.dashboardpages.admin.emailUser.edit');
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
    public function store(MailUsersR $request,CrudRepository $crud,EmailUsers $modile)
    {
        //
        $crud->store($request,$modile);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmailUsers  $emailUsers
     * @return \Illuminate\Http\Response
     */
    public function show(EmailUsers $emailUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmailUsers  $emailUsers
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailUsers $emailUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmailUsers  $emailUsers
     * @return \Illuminate\Http\Response
     */
    public function update($id,MailUsersR $request,CrudRepository $crud,EmailUsers $modile)
    {
        //
        $crud->update($request,$id,$modile);
        return redirect()->route('demailusers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmailUsers  $emailUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailUsers $emailUsers)
    {
        //
    }
}
