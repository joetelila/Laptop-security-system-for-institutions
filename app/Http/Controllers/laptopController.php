<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\astustud;
use App\StudentLaptop;
use App\GuestLaptop;
use App\StaffLaptop;
use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;


class laptopController extends Controller
{
    //
    public function getRegistered(){

        return view('register');

    }
    public function manCheck(){
    return view('manual');

    }

    public function checkStudent(Request $request){

        $stud_id = $request['body'];
        $stud = astustud::where('User_id',$stud_id)->get()->first();
       if(astustud::where('User_id',$stud_id)->get()->count()){

            $firstname = $stud->first_name;
            $lastname = $stud->last_name;
            $dep = $stud->dept;
            $loc = $stud->currently;
            $gender = $stud->gender;
            $year = $stud->year_joined;


           return response()->json(['fname'=>$firstname,'lname'=>$lastname,'dep'=>$dep,'loc'=>$loc,'gender'=>$gender,'year'=>$year],200);

       }else
           return response()->json(['err'=>1]);


    }

    public function addStudentLaptop(Request $request){
            $stud_id = $request['studentID'];
            $lapbrand = $request['labbrand'];
            $lapModel = $request['lapmodel'];
            $lapserial = $request['lapserial'];
            $lapcolor = $request['lapcolor'];
            $serloc = $request['lapserloc'];
            $studlapint = new StudentLaptop();
            $studlapint->students_id = $stud_id;
            $studlapint->brand = $lapbrand;
            $studlapint->model = $lapModel;
            $studlapint->ser_number = $lapserial;
            $studlapint->ser_loc = $serloc;
            $studlapint->color = $lapcolor;
            $studlapint->status = 1;
            $studlapint->save();

            $student = astustud::where('User_id',$stud_id)->get()->first();
            $fname = $student->first_name;
            $lname = $student->last_name;
            $us_Type = 1;

             return view('registered',compact('us_Type','stud_id','lapbrand','lapcolor','fname','lname','lapModel'));


    }

    public function addStaffLaptop(Request $request){
           $lapbrand = $request['staffLapBrand'];
            $lapModel = $request['staffLapModel'];
            $lapserial = $request['staffLapSerial'];
            $lapcolor = $request['staffLapColor'];
            $serloc   = $request['staffLpSerloc'];
            $staffDept = $request['staffDepartment'];
            $fname = $request['staffFname'];
            $lname = $request['staffLname'];
            $nameTitle = $request['staffTitle'];
            $jobTitle = $request['staffJtitle'];
            $gender = $request['staffGender'];

            $stafflapint = new StaffLaptop();
            $stafflapint->brand = $lapbrand;
            $stafflapint->Title = $nameTitle;
            $stafflapint->Fname = $fname;
            $stafflapint->Lname = $lname;
            $stafflapint->Job =   $jobTitle;
            $stafflapint->Gender = $gender;
            $stafflapint->model =   $lapModel;
            $stafflapint->ser_number = $lapserial;
            $stafflapint->ser_loc =   $serloc;
            $stafflapint->color = $lapcolor;
            $stafflapint->Dept = $staffDept;
            $stafflapint->status = 1;
            $stafflapint->save();
            $us_Type = 2;
            $stud_id = $staffDept;

            $fname = $nameTitle.' '.$fname;

             return view('registered',compact('us_Type','stud_id','lapbrand','lapcolor','fname','lname','lapModel'));
     }


     public function addGuestLaptop(Request $request){
             $lapbrand = $request['guestLapBrand'];
             $lapModel = $request['guestLapModel'];
             $lapserial = $request['guestLapSerial'];
             $lapcolor = $request['guestLapColor'];
             $serloc   = $request['guestLpSerloc'];

             $fname = $request['guestFname'];
             $lname = $request['guestLname'];
             $nameTitle = $request['guestTitle'];
             $gender = $request['guestGender'];

             $guestlapint = new GuestLaptop();
             $guestlapint->Title = $nameTitle;
             $guestlapint->Fname = $fname;
             $guestlapint->Lname = $lname;
             $guestlapint->brand = $lapbrand;
             $guestlapint->Gender = $gender;
             $guestlapint->model =   $lapModel;
             $guestlapint->ser_number = $lapserial;
             $guestlapint->ser_loc =   $serloc;
             $guestlapint->color = $lapcolor;

             $guestlapint->status = 1;
             $guestlapint->save();
             $us_Type = 3;
             $stud_id = $lapModel;

             $fname = $nameTitle.' '.$fname;

              return view('registered',compact('us_Type','stud_id','lapbrand','lapcolor','fname','lname','lapModel'));
      }

      public function getSearch(Request $res){

         $searchquery = $res['q'];
         $who = $res['serchWho'];

         switch ($who) {
           case 'stud':
             $studLaps = StudentLaptop::where('id',$searchquery)->get();
            return $studLaps->count();
    //         return view('manual',compact('studLaps','who'));
             break;
          case 'staff':
               $staffLaps = StaffLaptop::where('Fname','like','%'.$searchquery.'%')->get();

              // return view('manual',compact('staffLaps','who'));
               break;
        case 'guest':
             $guestLaps = GuestLaptop::where('Fname','like','%'.$searchquery.'%')->get();
             return view('manual',compact('guestLaps','who'));
              break;

           default:
             # code...
             break;
         }


    }
}
