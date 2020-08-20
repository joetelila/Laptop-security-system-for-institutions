<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use App\Student;
class LaptopController extends Controller
{
    //
    public function index() {
        return view('register');
    }
    public function index2() {
        return view("register2");
    }

    public function addStudentLaptop() {

        $student = Student::find(request()->studentID);
        $laptop = $student->addLaptop([
            'brand' => request()->labbrand , 
            'model' => request()->lapmodel ,
            'serial_number' => request()->lapserial , 
            'color' => request()->lapcolor , 
            'serial_location' => request()->lapserloc , 
            'status' => "2" , 
        ]);
        // return redirect()->back();
        return redirect(route('registered' , $laptop->id ));
        // return view('registered' , ["student" => $student]);

    }

    public function addStaffLaptop() {
        
    }

    public function addGuestLaptop() {

    }

}
