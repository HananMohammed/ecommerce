<?php

namespace App\Http\Controllers\Admin;

use App\ContactForm;
use App\Http\Controllers\Controller;

class ContactMailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =ContactForm::all();

        return view('admins.admin.contact_mails.forms',compact('data'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param ContactForm $model
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $model,$id)
    {
        $data = $model ->where('id' , $id )->get() ;
        return view('admins.admin.contact_mails.form_detail',compact('data'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param ContactForm $model
     * @return \Illuminate\Http\Response
     */
    public function destroy( ContactForm $model,$id)
    {
        $model ->where('id' , $id )->delete();
         return redirect()->back();
    }
}
