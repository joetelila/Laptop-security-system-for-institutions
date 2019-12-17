
class ReviewController extends Controller
{


    public function rate(Request $request){

         $rate_val  = $request['rate_val1'];
         $sme_id = $request['sme_id1'];
         $user_id = $request['user_id1'];

        $rate_col = rate::where([
            ['User_id', '=', $user_id],
            ['LNBS_id', '=', $sme_id],
        ]);

        $rate_col_count = rate::where([
            ['User_id', '=', $user_id],
            ['LNBS_id', '=', $sme_id],
        ])->count();



    if($rate_col_count>=1){

          $rate_SME = rate::where('LNBS_id',$sme_id)->get();
          $spec_rate_SME = $rate_SME->where('User_id',$user_id)->first();

           $spec_rate_SME->rate_val = $rate_val;
           $spec_rate_SME->update();


    }else{

        $rate = new rate();
        $rate->rate_val = $rate_val;
        $rate->User_id = $user_id;
        $rate->LNBS_id = $sme_id;
        $rate->save();
    }

    }
    
     public  function ReturnComUserProf($user_id){

     $com_user = User::where('id',$user_id)->first();

     $prof_name = $com_user->first_name.'-'.$com_user->phone.'-'.$com_user->gender.'-'.$com_user->last_name.'-'.$com_user->id.'.jpg';

      $dump_pro = "dump_profile.jpg";

      if (Storage::disk('local')->has($prof_name)){

          $file = Storage::disk('local')->get($prof_name);
      }else{
          $file = Storage::disk('local')->get($dump_pro);

      }



     return Response($file,200);


 }

 public function submitComment(Request $request){


       $com_cont = $request['body'];
       $user_id = $request['com_user_id'];
       $sme_id =  $request['com_sme_id'];


       $com_ins = new Comments();
       $com_ins->User_id = $user_id;
       $com_ins->l_n_b_s_id = $sme_id;
       $com_ins->comment = $com_cont;
       $com_ins->save();


       return response()->json(['message'=>'posted'],200);


 }





