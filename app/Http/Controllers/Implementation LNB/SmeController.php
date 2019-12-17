
class smeController extends Controller
{

    public function getSmeInfo($smeId){

       $lnb = LNBS::where('id',$smeId)->first();
       $photos = PHOTOS::where('LNBS_id',$smeId)->get();

       $comments = Comments::where('l_n_b_s_id',$smeId)->get();

       return  view('profile-photos', compact('lnb','comments'))->with('photos',$photos);


    }

    public function getSmeDetail($smeId){

        $lnb = LNBS::where('id',$smeId)->first();
        $user = Auth::user();
        $user_profile = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';

        $categories = Catagories::all();
        $subcats = SubCategory::all();
        $photos = PHOTOS::where('LNBS_id',$smeId)->get();

        return view('smedetail',compact('lnb','user','user_profile','categories','subcats'))->with('photos',$photos);


    }

    public function getadvertiseApp($smeId){

        $user = Auth::user();
        $ads = Ads::where('SME_id',$smeId)->first();

        $lnb_ins = LNBS::where('users_id',$user->SME_id)->first();

  //  return $lnb_ins->LNB_name;

        return view('profile-ads',compact('user',$user))->with('ads',$ads);
       // return view('profile-ads');

    }



    public function submitApp(Request $request){

          $this->validate($request,[

              'business_cat' => 'required',
              'business_name' => 'required',
              'business_motto' => 'required',
              'legal_Id' => 'required',
              'business_letter' => 'required'
          ]);

          $app_cat = $request['business_cat'];
          $app_name = $request['business_name'];
          $app_motto = $request['business_motto'];
          $app_essay = $request['business_essay'];

          $user_id = Auth::user()->id;
          $status = "pending..";
          $user_phone = Auth::user()->phone;
          $user_name = Auth::user()->first_name;
          $user_lname = Auth::user()->last_name;

          $newapp = new SME_APPS();

        $newapp->appCat = $app_cat;
        $newapp->Name= $app_name;
        $newapp->motto = $app_motto;
        $newapp->essay = $app_essay;
        $newapp->status = $status;
        $newapp->User_id = $user_id;
        $newapp->phone = $user_phone;

        $newapp->user_fname = $user_name.' '.$user_lname;

        $file_id = $request->file('legal_Id');
         $id_filename = $app_name.'-'.Auth::user()->id.'.jpg';
             if ($id_filename){

                $idfile =  Storage::disk('local')->put($id_filename, File::get($file_id));

             }


        $file_letter = $request->file('business_letter');
         $letter_filename = $app_name.'-'.'letter'.'-'.Auth::user()->id.'.jpg';

         if($file_letter){

             $filelettter=Storage::disk('local')->put($letter_filename,File::get($file_letter));


              }

             $user = Auth::user();
             $user->app_status = "pending..";
             $user->owns_SME = 1;
             $user->update();

         $newapp->save();

         return redirect()->route('smehome');

    }

public function uploadphoto(Request $request){


       $photo_type = $request['photo_type'];
       $file_upld = $request->file('photo_upld');


        if( $photo_type == "gallery"){



            $id_filename = 'lnb'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'-'.date('Y-m-d H:i:s').'.jpg';

            if ($id_filename){

                $idfile =  Storage::disk('local')->put($id_filename, File::get($file_upld));

                $photo = new PHOTOS();

                $photo->photoname=$id_filename;
                $photo->LNBS_id = Auth::user()->l_n_b_s_id;
                $photo->save();
            }

            return redirect()->route('mysme',['sme_id'=>Auth::user()->l_n_b_s_id]);
        }elseif ($photo_type == "profile_pic"){
           //...........................

            $db_name = 'lnbprofilepic'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'-'.date('Y-m-d H:i:s').'.jpg';
            $file_name =  'lnbprofilepic'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'.jpg';

            if ($db_name){

                $idfile =  Storage::disk('local')->put($db_name, File::get($file_upld));
                $main_pic = Storage::disk('local')->put($file_name, File::get($file_upld));

                $photo = new PHOTOS();

                $photo->photoname=$db_name;
                $photo->LNBS_id = Auth::user()->l_n_b_s_id;
                $photo->save();
            }

            return redirect()->route('mysme',['sme_id'=>Auth::user()->l_n_b_s_id]);


            //-------------------------
        }elseif ($photo_type == "carousal1"){
            //...........................

            $db_name = 'lnbcarousal1'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'-'.date('Y-m-d H:i:s').'.jpg';
            $file_name =  'lnbcarousal1'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'.jpg';

            if ($db_name){

                $idfile =  Storage::disk('local')->put($db_name, File::get($file_upld));
                $main_pic = Storage::disk('local')->put($file_name, File::get($file_upld));

                $photo = new PHOTOS();

                $photo->photoname=$db_name;
                $photo->LNBS_id = Auth::user()->l_n_b_s_id;
                $photo->save();
            }

            return redirect()->route('mysme',['sme_id'=>Auth::user()->l_n_b_s_id]);


            //-------------------------
        }elseif ($photo_type == "carousal2"){
            //...........................

            $db_name = 'lnbcarousal2'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'-'.date('Y-m-d H:i:s').'.jpg';
            $file_name =  'lnbcarousal2'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'.jpg';

            if ($db_name){

                $idfile =  Storage::disk('local')->put($db_name, File::get($file_upld));
                $main_pic = Storage::disk('local')->put($file_name, File::get($file_upld));

                $photo = new PHOTOS();

                $photo->photoname=$db_name;
                $photo->LNBS_id = Auth::user()->l_n_b_s_id;
                $photo->save();
            }

            return redirect()->route('mysme',['sme_id'=>Auth::user()->l_n_b_s_id]);


            //-------------------------
        }elseif ($photo_type == "carousal3"){
            //...........................

            $db_name = 'lnbcarousal3'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'-'.date('Y-m-d H:i:s').'.jpg';
            $file_name =  'lnbcarousal3'.'-'.Auth::user()->first_name.'-'.Auth::user()->l_n_b_s_id.'.jpg';

            if ($db_name){

                $idfile =  Storage::disk('local')->put($db_name, File::get($file_upld));
                $main_pic = Storage::disk('local')->put($file_name, File::get($file_upld));

                $photo = new PHOTOS();

                $photo->photoname=$db_name;
                $photo->LNBS_id = Auth::user()->l_n_b_s_id;
                $photo->save();
            }

            return redirect()->route('mysme',['sme_id'=>Auth::user()->l_n_b_s_id]);


            //-------------------------
        }



}
    
    
    
     public function getvacancyApp($vacId){

           $vacancies = Jobs::where('LNBS_id',$vacId)->get();

          return view('profile-vacancy',['user'=>Auth::user()->first()])->with('vacs',$vacancies);


     }


      public  function submittVac(Request $request){



           $job_title = $request['job_title'];
           $job_des = $request['job_desc'];
           $job_req = $request['job_req'];
           $job_age = $request['age'];
           $req = $request['exp_req'];

            $job = new Jobs();

           $job->job_title = $job_title;
           $job->job_desc = $job_des;
           $job->job_requirement = $job_req;
           $job->job_experience = $req;

            $user = Auth::user();


            $job->job_contact_phone = $user->phone;
             $job->job_contact_email = $user->email;
             $job->LNBS_id = $user->SME_id;


            $job->save();

          return redirect()->route('vacancy',['sme_id'=>$user->SME_id]);





      }

      public function stopVacancy($vacId){


          $vacancies = Jobs::where('id',$vacId)->first();
          $vacancies->delete();

          $user = Auth::user();

          return redirect()->route('vacancy',['sme_id'=>$user->SME_id]);

      }



    public function jobPic(){

           $prof_name = "newJob.png";


        $file = Storage::disk('local')->get($prof_name);

        return Response($file,200);


    }

    public function vacInfo($id){

         $job_inst = Jobs::where('id',$id)->first();

         $categories = Catagories::all();
         $subcats = SubCategory::all();

         $lnb = LNBS::where('id',$job_inst->l_n_b_s_id)->first();

          $usr = User::where('id',$lnb->users_id)->first();



        $user_profile = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';

        //    return $user_profile;

        return view('jobDesc',compact('categories','subcats','user_profile','job_inst','usr'),['user' => Auth::user()]);


    }



