<?php

namespace App\Http\Controllers;

use App\User;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
          $user=User::all();

         return view('admins.home')->with('user',$user) ;

    }

}
