<?php

namespace App\Http\Controllers\Admin;
use App\ContactForm;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Controller;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class ContactMailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $data =ContactForm::all();
        return view('dashboard.dashboardpages.admin.contact_mails.forms',compact('data'));

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CrudRepository $crud,ContactForm $model,$id)
    {
        $data =$crud->getById($model,$id);
        return view('dashboard.dashboardpages.admin.contact_mails.form_detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudRepository $crud,ContactForm $model,$id)
    {
         $crud->delete($id,$model);
         return redirect()->back();
    }
}
