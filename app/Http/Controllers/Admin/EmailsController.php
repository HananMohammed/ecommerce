<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\model\Emails;
use Illuminate\Support\Facades\Auth;

class EmailsController extends Controller
{
    protected $email ;

   public function __construct(Emails $email)
   {
       $this->email = $email ;
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = $this->email->all();

        return view('dashboard.dashboardpages.author_admin.email.index',compact('email'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
        $this->email->create([
            'mail' => $request->mail ,
            'created_by' => Auth::id()
        ]);

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         $this->email->where('id' , $id)->delete();

        return redirect()->back();

    }
}
