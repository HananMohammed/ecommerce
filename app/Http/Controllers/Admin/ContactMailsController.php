<?php

namespace App\Http\Controllers\Admin;

use App\ContactForm;
use App\Http\Controllers\Controller;
use App\repository\CrudRepository;

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
