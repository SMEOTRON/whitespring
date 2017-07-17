<?php

namespace whitespring\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use whitespring\Http\Requests;

class StudInsertController extends Controller
{
    //
    public function fetchUsers(){
      $users = DB::select('select * from student');
      return json_encode($users);
   }

    public function insertform(){
      return view('stud_create');
   }

   public function insert(Request $request){
      $name = $request->input('stud_name');
      DB::insert('insert into student (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
