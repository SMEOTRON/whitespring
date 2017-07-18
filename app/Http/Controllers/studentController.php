<?php

namespace whitespring\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use whitespring\Http\Requests;

class studentController extends Controller
{
    //
    public function fetchStudent(Request $request,$id){

      $student = DB::select('select * from student where id =?',[$id]);
      if(json_encode($student)=="[]"){
        echo '[{"error":"true","comment":"no matching student"}]';
      }
      else{
      return json_encode($student);
    }

    }
}
