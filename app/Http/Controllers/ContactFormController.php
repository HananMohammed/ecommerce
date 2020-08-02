<?php

namespace App\Http\Controllers;
use App\repositoryhome\ContactRepo;
use App\ContactForm;
use App\repository\CrudRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ContactFormReq;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store( CrudRepository $crud ,ContactFormReq $req,ContactForm $model,ContactRepo $repo )
    {   if(isset($req->file)){
      //  dd('ll');
              $model->name = $req->input('name');
              $model->email = $req->input('email');
              $model->phone = $req->input('phone');
              $model->subject = $req->input('subject');
              $model->message = $req->input('message');
              $fileName = time().'.'.$req->file->extension();
              $req->file->move(public_path('image'), $fileName);
              $model->file = $fileName;
              $model->save();

              $repo->sendMail($req);
              return view('homepage.thanks_form');
    }else{
        $crud->store($req,$model);
        $repo->sendMail($req);
        return view('homepage.thanks_form');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
