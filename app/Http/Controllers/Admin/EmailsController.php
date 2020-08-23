<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\model\Emails;
use App\interfaces_Implementation\StoreAndUpdateImp ;
use Illuminate\Support\Facades\Auth;

class EmailsController extends Controller
{
    protected $email ;
    protected $store ;

   public function __construct(Emails $email , StoreAndUpdateImp $store )
   {
       $this->email = $email ;
       $this->store = $store ;
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = $this->email->all();

        return view('admins.author_admin.email.index',compact('email'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
         $this->store->store($request ,$this->email);

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
