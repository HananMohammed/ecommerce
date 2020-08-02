<?php

namespace App\Http\Controllers;

use App\Emails;
use App\Http\Requests\Email;
use App\repository\CrudRepository;
use App\repository\MailRepository;
use Illuminate\Http\Request;

class EmailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud,Emails $email)
    {
         $mailArray =$crud->getAllData($email);
        return view('dashboard.dashboardpages.author_admin.mail.mail',compact('mailArray'));
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
     * @param  Email  $request
     * @param MailRepository $mailRepository
     * @return \Illuminate\Http\Response
     */
    public function store(Email $request  ,CrudRepository $crud,Emails $email)
    {
        //
        $crud->store($request,$email);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emails  $emails
     * @return \Illuminate\Http\Response
     */
    public function show(Emails $emails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emails  $emails
     * @return \Illuminate\Http\Response
     */
    public function edit(Emails $emails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emails  $emails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emails $emails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MailRepository $mailRepository
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,CrudRepository $crud ,Emails  $email  )
    {
        //
        $crud->delete($id, $email);
        return redirect()->back();

    }
}
