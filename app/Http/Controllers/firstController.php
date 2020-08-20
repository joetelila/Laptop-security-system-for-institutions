<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\Student;
use App\Laptop;
use App\Staff;
class FirstController extends Controller
{
    //
    public function index() {

        return view('index' , [ 
            'totalLaptops' => Laptop::all()->count() , 
            'totalStudents' => Laptop::all()->count() , 
            'totalStudentLaptops' => Student::countLaptops() , 
            'totalGuestLaptops' => Guest::countLaptops() , 
            'totalStaffLaptops' => Staff::countLaptops(),
        ]);
    }
}
