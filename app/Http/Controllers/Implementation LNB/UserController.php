
 class UserController extends Controller
 {

      public function postSignUp(Request $request){

             $fname = $request['fname'];
             $lname = $request['lname'];
             $gender = $request['gender'];
             $city = $request['city'];
             $email = $request['email'];
             $job = $request['job'];
             $phone = $request['phone'];
             $address = $request['address'];
             $password = bcrypt($request['password']);
             $owns_sme = 0;
             $is_admin = 0;
             $sme_id = -1;

    $user = new User();

    $user->email = $email;
    $user->first_name = $fname;
    $user->password = $password;
    $user->last_name = $lname;
    $user->gender = $gender;
    $user->job = $job;
    $user->phone = $phone;
    $user->address = $address;
    $user->city = $city;
    $user->is_admin = $is_admin;
    $user->owns_SME = $owns_sme;
    $user->SME_id = $sme_id;
    $user->save();

   Auth::login($user);

     return redirect()->route('logout');

    }

      public function PostSignin(Request $request){

        $this->validate($request,[

              'email' => 'required',
              'password' => 'required|min:4 '


        ]);

           if(Auth::attempt(['email' => $request['email'],'password' => $request['password'] ])){

                if(Auth::user()->is_admin == 1){

                    return redirect()->route('adminhome',compact(['user' => Auth::user()]) );

                }else{

                    return redirect()->route('smehome',compact(['user' => Auth::user()]) );
              }
         }else {
            return redirect()->back();
           }


      }


      public function getlogout(){

        Auth::logout();
        return redirect()->route('home');

      }

     public function UserInfo()
     {
         $categories = Catagories::all();
         $subcats = SubCategory::all();
  $user_profile = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';
return view('profile-about',compact('categories','subcats','user_profile'),['user' => Auth::user()]);
       }


     public function userProflePic($filename){

         $file = Storage::disk('local')->get($filename);

         return Response($file,200);


     }

     public function updateInfo(Request $request) {

          $first_name  = $request['fname'];
          $last_name = $request['last_name'];
          $bday = $request['bday'];

          $user_int = User::where('id',Auth::user()->id)->first();

         $user_int ->first_name = $first_name;
         $user_int->last_name = $last_name;

         $user_int->update();


         return redirect()->route('profile.about');
        }

      public function updtProfPic(Request $request) {


          $file_upld = $request->file('prof_pic');

    $id_filename = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';



       if ($id_filename){

              $idfile =  Storage::disk('local')->put($id_filename, File::get($file_upld));
          }
          return redirect()->route('profile.about');
 }




 
