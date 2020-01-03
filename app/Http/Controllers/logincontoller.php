<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminLogin;

class logincontoller extends Controller
{
     public function store(Request $request){

        // dd($request->all());
        $username=new adminLogin;
        $admin_logins->username=$request->username;
        $admin_logins->save();
        return redirect()->back();
        // return view('/');
     }
     public function adminpage( ){
          return view('adminpanel.dashboard ');
           
}
}