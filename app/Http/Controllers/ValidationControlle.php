<?php

namespace whitespring\Http\Controllers;

use Illuminate\Http\Request;

use whitespring\Http\Requests;

class ValidationControlle extends Controller
{
    //
    public function showform(){
      return view('login');
   }
   public function validateform(Request $request){
      print_r($request->all());
      $this->validate($request,
      [
         'username'=>'required|max:8',
         'password'=>'required'
      ]);
   }
}
