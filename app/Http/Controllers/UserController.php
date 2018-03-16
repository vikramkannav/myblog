<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.user_profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id){
        $user=Auth::user();
        $input=$request->all();

         if($request->old_password && $request->new_password){
            if(Hash::check($input['old_password'], $user->password)){
                $input['password']=$input['new_password'];
                $input['password_confirmation']=$input['new_password'];
            }else
                return redirect()->back()->withInput()->withErrors(["Old password doesn't match."]);
        }
        $user->update($input);
        if ($user->errors()) {
                 return redirect()->back()->withInput()->withErrors($user->errors());
        }
        return redirect('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function updatePassword(Request $request,$id)
    {
      if($request->isMethod('get')){
        return view('user.change-password');
  }

    }
    public function editProfilePic(Request $request,$id)
    {
        return view('user.edit-profile-pic');
    }


}
