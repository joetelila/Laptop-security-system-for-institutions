
class SmeManagerController extends Controller
{

    public function getSmeManager(){

        $lbns = LNBS::all();
        $smeads = SME_APPS::all();
        $pendingpass = Ads::where("ad_status","pending..");
        $acceptedads = Ads::where("ad_status","accepted");
        $event_stopped  = Events::where("event_status","stopped");
        $events_running = Events::where("event_status","running");
       return view('manager',compact('lbns','smeads','pendingpass','acceptedads','events_running','event_stopped'),['user' => Auth::user()]);


    }

    public function getSmeApps(){

         $all_apps = SME_APPS::all();
         return view('apps',compact('all_apps'),['user' => Auth::user()]);

    }



    public function acceptApp(Request $request){

         $appinfo = SME_APPS::where('id',$request['sme_id'])->first();
         $lnb_name =  $appinfo->Name;
         $lnb_quote = $appinfo->motto;
         $user_id = $appinfo->User_id;
         $cat = $appinfo->appCat;
         $lat = $request['latitude'];
         $long = $request['longitude'];

         $lbn = new LNBS();

         $lbn->LNB_name = $lnb_name;
         $lbn->lnb_quote = $lnb_quote;
         $lbn->users_id = $user_id;
         $lbn->category = $cat;
         $lbn->longitude = $long;
         $lbn->latitude = $lat;
         $lbn->save();

        $appinfo->status = "accepted";
        $appinfo->update();


        $lnbtoGetID = LNBS::where('users_id',$user_id)->first();
        $lnbID = $lnbtoGetID->id;

        $applied_user = User::where('id',$user_id)->first();

        $applied_user->app_status = "accepted";
        $applied_user->SME_id =$lnbID;
        $applied_user->update();


        return redirect()->route('smeapps');
    }


    public  function acceptAd($ad_id){

        $prv_ad = Ads::where('id',$ad_id)->first();

        $prv_ad->ad_status = "accepted";

        $prv_ad->save();

        return redirect()->route('adapps');

    }

    public  function removeApp($ad_id){

        $prv_ad = Ads::where('id',$ad_id)->first();

        $prv_ad->delete();

        return redirect()->route('adapps');

    }


    public function getSmeAdApps(){

          $ads = lbnadApps::all();

        return view('ads',compact('ads'),['user' => Auth::user()]);

    }

public  function getAdDetail(){

    return view('addetail');
}

 public function getDetailInfo($app_id){

      $sme_app = SME_APPS::where('id',$app_id)->first();

     return view('appdetail',compact('sme_app') );


 }

 public function getLegalId($filename){

    $file = Storage::disk('local')->get($filename);

   return Response($file,200);

}


 public  function getPhoto($filename){

       $file = Storage::disk('local')->get($filename);
       return Response($file,200);
  }

