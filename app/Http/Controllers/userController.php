<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\astustud;

class userController extends Controller
{
    //
    public function addUser(Request $request){
      return view('addstudent');
     }

     public function regStudent(Request $request){

        $studId = $request['studID'];
        $studFname = $request['studFname'];
        $studLname = $request['studLname'];
        $studDept = $request['studDept'];
        $studYrJoined = $request['studYrJoined'];
        $studGender = $request['studGender'];
        $curr = 1;

        $studinst = new astustud();
        $studinst->User_id= $studId;
        $studinst->first_name = $studFname;
        $studinst->last_name = $studLname;
        $studinst->dept = $studDept;
        $studinst->year_joined = $studYrJoined;
        $studinst->gender = $studGender;
        $studinst->currently = $curr;
        $studinst->save();
        return view('register');


     }

}
