<?php

namespace App\Http\Controllers\Admin;
use Gate;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     $users =User::all();
         return view('dashboard.dashboardpages.admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit.users')){
            return redirect()->route('admin.users.index');
        }
        $roles =Role ::all();
        return view('dashboard.dashboardpages.admin.users.edit')->with([
            'user'=>$user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         //dd($request);
        //allow to pass array of id's to roles method
        $user->roles()->sync($request->roles);
        $user->name=$request->name;
        $user->email=$request->email;
       if( $user->save()){
       //dd($request->session()->flash('success',$user->name .' has been updated'));
       $request->session()->flash('success',$user->name .' has been updated');
       }else{
              $request->session()->flash('error','error updating that user');
       }
        return  redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd($user);
        if(Gate::denies('delete.users')){
            return redirect()->route('admin.users.index');
        }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
