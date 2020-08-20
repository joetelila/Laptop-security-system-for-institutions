<?php

namespace App\Http\Controllers;

use App\Laptop;
use App\Student;
use Illuminate\Http\Request;

class LaptopRegisterController extends Controller
{
    //
    public function show($laptop_id) {
        $laptop =  Laptop::find($laptop_id); 
        return view('registered' , ["laptop" => $laptop]);
            
    }
}
