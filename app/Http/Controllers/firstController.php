<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\StudentLaptop;
use App\GuestLaptop;
use App\StaffLaptop;
use App\astustud;

class firstController extends Controller
{
    //

    public function getIndex(){


          if (Auth::user()){



           $totstudLaps = StudentLaptop::all()->count();
           $totguestLaps = GuestLaptop::all()->count();
           $totstaffLaps = StaffLaptop::all()->count();
           $totLostLaps = 0;
           $totStuds = astustud::all()->count();
           $totalLaps = $totstudLaps+$totguestLaps+$totstaffLaps;

           $totToshiba = StudentLaptop::where("brand",2)->get()->count();
           $totDell = StudentLaptop::where("brand",3)->get()->count();
           $totSamsung = StudentLaptop::where("brand",5)->get()->count();
           $totalRest =  $totstudLaps-($totToshiba+$totDell+$totSamsung);
          $toshPerc = ($totToshiba*100)/$totstudLaps;
          $dellPerc = ($totDell*100)/$totstudLaps;
          $samPerc = ($totSamsung*100)/$totstudLaps;
          $restPerc = 100 - ($toshPerc+$dellPerc+$samPerc);


           return view('index',compact('totstudLaps','totguestLaps',
           'totstaffLaps','totLostLaps','totStuds','totalLaps',
           'totToshiba','totDell','totSamsung','totalRest',
           'toshPerc','dellPerc','samPerc','restPerc'));

          }else{


              return view('login');

          }

    }

    public function PostSignin(Request $request){

        $this->validate($request,[

            'email' => 'required',
            'password' => 'required|min:4 '


        ]);


        if(Auth::attempt(['email' => $request['email'],'password' => $request['password'] ])){

          $totstudLaps = StudentLaptop::all()->count();
          $totguestLaps = GuestLaptop::all()->count();
          $totstaffLaps = StaffLaptop::all()->count();
          $totLostLaps = 0;
          $totStuds = astustud::all()->count();
          $totalLaps = $totstudLaps+$totguestLaps+$totstaffLaps;

          $totToshiba = StudentLaptop::where("brand",2)->get()->count();
          $totDell = StudentLaptop::where("brand",3)->get()->count();
          $totSamsung = StudentLaptop::where("brand",5)->get()->count();
          $totalRest =  $totstudLaps-($totToshiba+$totDell+$totSamsung);
         $toshPerc = ($totToshiba*100)/$totstudLaps;
         $dellPerc = ($totDell*100)/$totstudLaps;
         $samPerc = ($totSamsung*100)/$totstudLaps;
         $restPerc = 100 - ($toshPerc+$dellPerc+$samPerc);


          return view('index',compact('totstudLaps','totguestLaps',
          'totstaffLaps','totLostLaps','totStuds','totalLaps',
          'totToshiba','totDell','totSamsung','totalRest',
          'toshPerc','dellPerc','samPerc','restPerc'));

          return view('index',compact('totstudLaps','totguestLaps',
          'totstaffLaps','totLostLaps','totStuds','totalLaps',
          'totToshiba','totDell','totSamsung','totalRest',
          'toshPerc','dellPerc','samPerc','restPerc'));

        }else
            return view('login');
    }

    public function getlogout(){

        Auth::logout();
        Session::flush();
        return redirect('/');

    }



}
