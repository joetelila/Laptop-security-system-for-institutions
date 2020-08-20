<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index() {

    }
    public function checkStudent() {
        // dd(request()->all());
        // return response()->json("It exists ");
        $student_id = request()->student_id;
        if(Student::student_exists($student_id)) 
        {
            
            $student = Student::find($student_id);
    
            return response()->json(
                [
                    "id" => $student->id , 
                    "first_name" => $student->first_name , 
                    "last_name" => $student->last_name , 
                    "department" => $student->department , 
                    "year_joined" => $student->year_joined , 
                    "currently" => $student->currently , 
                    "gender" => $student->gender , 
                ]
            );
        } 
        else  
        {
            return response()->json(["err" =>  1]);
        }
      
    }
}
