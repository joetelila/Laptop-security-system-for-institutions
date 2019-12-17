<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
<script>

       function checkStud() {

            var id = document.getElementById("holderStudentID").value;

           $.ajax({
               method: 'POST',
               url: url,
               data: { body:id,_token: token }


           }).done(function (msg) {
               if(!msg['err']){


                   var studlapinfo2 = document.getElementById("studlapinfo");
                   var regstudinfo2 = document.getElementById("regstudInfo");


                   var studName = document.getElementById("studname");
                   var studdept = document.getElementById("studDept");
                   var studyear = document.getElementById("studyr");
                   var studloc = document.getElementById("studstat");
                   var studgend = document.getElementById("studgen");
                   document.getElementById("errdisp").style.display = 'none';

                   studName.innerHTML = msg['fname']+" "+msg['lname'];
                   studdept.innerHTML = msg['dep'];
                   studyear.innerHTML = msg['year'];
                   studloc.innerHTML = msg['loc'];
                   studgend.innerHTML = msg['gender'];

                   regstudinfo2.style.display = '';
                   studlapinfo2.style.display = '';

                   document.getElementById("selStudID").value = id;

               }else {

                    document.getElementById("errdisp").style.display = '';

                   var studlapinfo = document.getElementById("studlapinfo");
                   var regstudinfo = document.getElementById("regstudInfo");
                   regstudinfo.style.display = 'none';
                   studlapinfo.style.display = 'none';

               }
           });

       }
     
       $(window).load(function(){
           document.getElementById("mainWrapper").style.display = "block";
       })

</script>

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<script>



    function prepare(){
        var studInfo = document.getElementById("studInfo");
        var staffInfo = document.getElementById("staffInfo");
        var guestInfo = document.getElementById("guestInfo");
        var studlapinfo = document.getElementById("studlapinfo");
        var regstudinfo = document.getElementById("regstudInfo");
        var errdiv      =  document.getElementById("errdisp");
            regstudinfo.style.display = 'none';
            studlapinfo.style.display = 'none';
            studInfo.style.display = 'none';
            staffInfo.style.display = 'none';
            guestInfo.style.display = 'none';
             errdiv.style.display = 'none';
    }

    function enableForm(){
        var studInfo = document.getElementById("studInfo");
        var staffInfo = document.getElementById("staffInfo");
        var guestInfo = document.getElementById("guestInfo");
        var userType = document.getElementById("userType");

          var userTypeControl = document.getElementById("selector1");
          var selecVal = userTypeControl.value;

           if(selecVal == 1){
               studInfo.style.display = 'block';
               staffInfo.style.display = 'none';
               guestInfo.style.display = 'none';
               userType.style.display = 'none';
           }else
               if(selecVal == 2){
                staffInfo.style.display = 'block';
                guestInfo.style.display = 'none';
                studInfo.style.display = 'none';
                userType.style.display = 'none';
               }else
                   if(selecVal == 3){
                       guestInfo.style.display = 'block';
                       studInfo.style.display = 'none';
                       staffInfo.style.display = 'none';
                       userType.style.display = 'none';

                   }else{
                       alert("Please Select One!");
                       studInfo.style.display = 'none';
                       staffInfo.style.display = 'none';
                       guestInfo.style.display = 'none';

                   }





    }

    </script>
</head>
<body class="cbp-spmenu-push" onpageshow="prepare()">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
        <aside class="sidebar-left">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="{{route('home')}}"><span class="fa fa-qrcode"></span> ASTU<span class="dashboard_text">Laptop Manager Admin</span></a></h1>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                      <a href="{{route('home')}}">
                      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                      </a>
                    </li>
                    <li class="treeview">
                      <a href="{{route('register')}}">
                      <i class="fa  fa-laptop"></i> <span>Register</span>
                      </a>
                    </li>
             <li class="treeview">
                      <a href="#">
                      <i class="fa  fa-bars"></i> <span>Lost Laptops</span>
                      </a>
                    </li>
                   <li class="treeview">
                      <a href="{{route('manualcheck')}}">
                      <i class="fa  fa-check-circle"></i> <span>Manual Check</span>
                      </a>
                    </li>
                    <li class="treeview">
                      <a href="#">
                      <i class="fa fa-users"></i> <span>Students</span>
                      </a>
                    </li>
                       <li class="treeview">
                      <a href="#">
                      <i class="fa fa-question-circle"></i> <span>Help</span>
                      </a>
                    </li>
                     <li class="header">ADD</li>
                    <li><a href="{{route('addnewstudent')}}"><i class="fa fa-plus-circle text-red"></i> <span>ADD NEW STUDENT</span></a></li>
                   </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </aside>


    </div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
			<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<div class="profile_details_left"><!--notifications of menu start -->

					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>

                <div class="header-right">


                    <!--search-box-->
                    <div class="search-box">
                        <form class="input">
                            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                            <label class="input__label" for="input-31">
                                <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                </svg>
                            </label>
                        </form>
                    </div><!--//end-search-box-->

                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src="images/4.jpg" alt="" height="44" width="44"> </span>
                                        <div class="user-name">
                                            <p>{{ \Illuminate\Support\Facades\Auth::user()->first_name }} {{ \Illuminate\Support\Facades\Auth::user()->last_name }}</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class="fa fa-angle-down lnr"></i>
                                        <i class="fa fa-angle-up lnr"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                                    <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
                                    <li> <a href="{{ route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="clearfix"> </div>
		</div>

        <div id="page-wrapper">
			<div class="main-page">
				<div class="forms" style="display:none" id="mainWrapper">
					<h2 class="title1">Register New Laptop</h2>

					<div class="form-grids row widget-shadow" id="userType" data-example-id="basic-forms">

                        <div class="form-title">
							<h4>USER TYPE </h4>
						</div>
						<div class="form-body">
							<div class="form-group">
								<label for="selector1">Select User Type</label>
				     <select name="selector1" id="selector1" class="form-control1" onchange="enableForm()">
										<option value="0">Please Select one</option>
                                        <option value="1">REGULAR STUDENT</option>
										<option value="2">STAFF</option>
										<option value="3">GUEST</option>
									</select>
								</div>
                      </div>
					</div>

                    <div class="form-grids row widget-shadow" id="studInfo" data-example-id="basic-forms" style="height:155px;width:102%">
						<div class="form-title">
							<h4>SELECT STUDENT </h4>
						</div>

                        <div class="form-body">
                             <div class="form-group">
                                  <div class="col-md-5">
                                    <label for="holderStudentID">ENTER STUDENT ID</label>
              <input type="email" class="form-control" id="holderStudentID" placeholder="STUDENT ID">
                                    </div>
                                    <div class="col-md-4" style="margin-top:1.1%">
                                    <ul class="bt-list">
    			 <li style="margin-right: 2%;width:41%"><a href="#" class="hvr-icon-fade col-7" onclick="checkStud()">check</a></li>
               <li style="width:41%"><a href="#" onclick="location.reload()" class="hvr-icon-sink-away col-5" >Cancel</a></li>
                                        </ul>
                                    </div>


                             </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-8" id="errdisp" style="margin-top: 2.5%;margin-left: 10%">

                            <div class="alert alert-danger" role="alert">
                                <strong>ERROR !</strong> No database record found. Please register Student if not registered!
                            </div>
                        </div>

                          <div class="col-sm-8 w3-agileits-crd widgettable" style="margin-top: 1.3%;" id="studlapinfo">

                            <div class="card card-contact-list" >
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>ADD LAPTOP INFORMATION</h3>
                                </div>
                                <hr class="widget-separator">

                                <div class="card-body p-b-20" style="margin-top: -8%;">
                                   <div class="form-body">
							<form action="{{route('addstudentlaptop')}}" method="post">
                                <input type="hidden" name="studentID" id="selStudID">
                             <div class="form-body" data-example-id="simple-form-inline" style="    margin-left: -5.5%;">
							<div class="form-inline">
                                <div class="form-group">
                                     <label for="lapBrand">Brand</label>
                                   <select name="labbrand" id="selector1" class="form-control1">
                                           <option value="0">Select Brands</option>
                                           <option value="1">Apple MacBook</option>
                                           <option value="2">Toshiba</option>
                                           <option value="3">Dell</option>
                                           <option value="4">Lenovo</option>
                                           <option value="5">Samsung</option>
                                           <option value="6">Fujistu</option>
                                           <option value="7">Hewlett-Packard (HP)</option>
                                           <option value="8">Think Pad</option>
                                           <option value="9">Life is Goog (LG)</option>
                                           <option value="10">Sony</option>
                                           <option value="11">VIO</option>
                                           <option value="12">Microsoft</option>
                                           <option value="13">Chrome Book</option>




									</select>
                                </div>
                                 <div class="form-group" style="
    width: 42.776%">
                                    <label for="lapModel">Model</label>
                                        <input name="lapmodel" type="text" class="form-control1" id="lapModel" placeholder="Laptop Model">
                                </div>
                                 </div>
						</div>


                                <div class="form-group">
                                    <label for="lapSerial">Serial Number</label>
                                        <input name="lapserial" type="text" class="form-control1" id="lapSerial" placeholder="Laptop Serial Number">
                                 </div>
                                <div class="form-group">
                                    <label for="lapColor">Color</label>
                                        <select name="lapcolor" id="lapColor" class="form-control1">
										<option value="0">select color</option>
										<option value="1">Black</option>
										<option value="2">White</option>
										<option value="3">Red</option>
                                        <option value="4">Blue</option>
                                        <option value="5">Green</option>
									</select>
                                 </div>
                                <div class="form-group">
									<label for="radio" >Serial Number Location</label><br>
									<div class="radio-inline"><label><input type="radio" name="lapserloc" value="undrLaptop"> Under Laptop</label></div>
                                        <div class="radio-inline"><label><input type="radio" name="lapserloc" value="undrBattr"> Under Battery</label></div>

								</div>
                                <div style="float:right;margin-right:-6%">

                                <button type="submit" class="btn btn-success">Add Laptop</button>

                                </div>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </form>
						</div>


                            </div>
							</div>
                      	</div>

                         </div>
                          <div class="elements">
                            <div class="col-sm-4 w3-agileits-crd widgettable" style="margin-top: 1.3%;" id="regstudInfo">

                            <div class="card card-contact-list" style="margin-left: 2%;">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>STUDENT INFORMATION</h3>
                                </div>
                                <hr class="widget-separator">
                               <div class="list-group">
                                        <a class="list-group-item media" href="">
                                             <div class="pull-left">
                                                <img class="lg-item-img" src="images/avatar.png" alt="" height="50" width="50">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading" id="studname">Yohannes Kifle</div>
                                                	<small class="lg-item-text" id="studDept">BSc. Degree in computer Science</small>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="lg-item-heading"><span class="fa fa-check-circle" style="color:green"></span></div>
                                                </div>
                                           </div>
                                         <div style="margin-left:21%">
                                             <br>
                                      <div class="pull-left">
                                                	<div class="lg-item-heading">Class Year</div>
                                                	<small class="lg-item-text" style="display:block" id="studyr">Third Year</small>
                                                </div>
                                                 <br><br>
                                                 <div class="pull-left">
                                                	<div class="lg-item-heading">Currently</div>
                                                	<small class="lg-item-text" style="display:block" id="studstat">In Campus</small>
                                                </div>
                                                 <br><br>
                                                 <div class="pull-left">
                                                	<div class="lg-item-heading">Gender</div>
                                                	<small class="lg-item-text" style="display:block" id="studgen">Male</small>
                                                </div>

                                            </div>

                                        </a>
                                     </div>
                                </div>
                            </div>
							</div>
                      	</div>

                    </div>

      <form action="{{route('addstafflaptop')}}" method="post">
        <div class="form-grids row widget-shadow" id="staffInfo" data-example-id="basic-forms">
						<div class="form-title">
							<h4>STAFF REGISTRATION </h4>
						</div>
                         <div class="clearfix"></div>
                         <div class="elements">
                            <div class="col-sm-4 w3-agileits-crd widgettable" style="margin-top: 0.7%;">

                            <div class="card card-contact-list" style="margin-right: 2%;margin-bottom:0px">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>STAFF USER INFO</h3>
                                </div>
                                <hr class="widget-separator">
                                <div class="form-group col-md-3" style="margin-left:-5%">
                                     <label for="lapBrand">Title</label>
                                   <select name="staffTitle" id="selector1" class="form-control1">
                   <option value="0">Title</option>
                    <option value="Prof.">Prof.</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                     </select>
                                </div>
                                <div class="form-group col-md-4" style="margin-left: -4%;
    width: 39%;">
                                    <label for="staffFname">First Name</label>
                                        <input type="text" name="staffFname" class="form-control1" id="staffFname" placeholder="First Name">
                                 </div>
                                <div class="form-group col-md-4" style="margin-left: -4%;
    width: 39%;">
                                    <label for="staffLname">Last Name</label>
                                    <input type="text" name="staffLname" class="form-control1" id="staffLname" placeholder="Last Name">
                                 </div>
                                <div class="form-group">
                                    <label for="staffJtitle">Job Title</label>
                                        <input type="text" name="staffJtitle" class="form-control1" id="staffJtitle" placeholder="Job Title Here..">
                                 </div>
                                 <div class="form-group">
                                     <label for="staffJtitle">Department</label>
                                         <input type="text" name="staffDepartment" class="form-control1" id="staffDept" placeholder="Department Here..">
                                  </div>
                                <div class="form-group">
									<label for="radio" >Gender</label><br>
									<div class="radio-inline"><label><input type="radio" name="staffGender" value="male"> Male</label></div>
                                        <div class="radio-inline"><label><input type="radio" name="staffGender" value="female"> Female</label></div>

								</div>

                                </div>
                            </div>
							</div>
                      	</div>

                           <div class="col-sm-8 w3-agileits-crd widgettable" style="margin-top: 0.7%;">

                            <div class="card card-contact-list" >
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>ADD LAPTOP INFORMATION</h3>
                                </div>
                                <hr class="widget-separator">

                                <div class="card-body p-b-20" style="margin-top: -8%;">
                                   <div class="form-body">

                             <div class="form-body" data-example-id="simple-form-inline" style="    margin-left: -5.5%;">
							<div class="form-inline">
                                <div class="form-group">
                                     <label for="lapBrand">Brand</label>
                                   <select name="staffLapBrand" id="selector1" class="form-control1">
                                     <option value="0">Select Brands</option>
                                     <option value="1">Apple MacBook</option>
                                     <option value="2">Toshiba</option>
                                     <option value="3">Dell</option>
                                     <option value="4">Lenovo</option>
                                     <option value="5">Samsung</option>
                                     <option value="6">Fujistu</option>
                                     <option value="7">Hewlett-Packard (HP)</option>
                                     <option value="8">Think Pad</option>
                                     <option value="9">Life is Goog (LG)</option>
                                     <option value="10">Sony</option>
                                     <option value="11">VIO</option>
                                     <option value="12">Microsoft</option>
                                     <option value="13">Chrome Book</option>
                                   </select>
                                </div>
                                 <div class="form-group" style="width: 42.776%">
                                    <label for="lapModel">Model</label>
                                        <input type="text" name="staffLapModel" class="form-control1" id="lapModel" placeholder="Laptop Model">
                                </div>
                                 </div>
						   </div>


                                <div class="form-group">
                                    <label for="lapSerial">Serial Number</label>
                                        <input type="text" name="staffLapSerial" class="form-control1" id="lapSerial" placeholder="Laptop Serial Number">
                                 </div>
                                <div class="form-group">
                                    <label for="lapColor">Color</label>
                                        <select name="staffLapColor" id="lapColor" class="form-control1">
                                          <option value="0">select color</option>
                      										<option value="1">Black</option>
                      										<option value="2">White</option>
                      										<option value="3">Red</option>
                                          <option value="4">Blue</option>
                                          <option value="5">Green</option>
									</select>
                                 </div>
                                <div class="form-group">
									<label for="radio" >Serial Number Location</label><br>
									<div class="radio-inline"><label><input type="radio" name="staffLpSerloc" value="undrLaptop"> Under Laptop</label></div>
                                        <div class="radio-inline"><label><input type="radio" name="staffLpSerloc" value="undrBattr"> Under Battery</label></div>

								</div>
                                </div>


                            </div>
							</div>
                      	</div>

                         </div>

                            <div class="clear-fix"></div>
                            <div style="float:right">
                               <button type="submit" class="btn btn-success btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
                                <button type="button" class="btn btn-danger btn-flat btn-pri"><i class="fa fa-minus" aria-hidden="true"></i>Cancel</button>
                               </div>

                    </div>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>

    <div class="form-grids row widget-shadow" id="guestInfo" data-example-id="basic-forms">
						<div class="form-title">
							<h4>GUEST INFORMATION </h4>
						</div>
<!-- here STARTS Guest Information -->
<form action="{{route('addguestlaptop')}}" method="post">

<div class="elements">
   <div class="col-sm-4 w3-agileits-crd widgettable" style="margin-top: 0.7%;">

   <div class="card card-contact-list" style="margin-right: 2%;margin-bottom:0px">
<div class="agileinfo-cdr">
       <div class="card-header">
           <h3>NEW GUEST INFO</h3>
       </div>
       <hr class="widget-separator">
       <div class="form-group col-md-3" style="margin-left:-5%">
            <label for="selector1">Title</label>
          <select name="guestTitle" id="selector1" class="form-control1">
<option value="0">Title</option>
<option value="Prof.">Prof.</option>
<option value="Dr.">Dr.</option>
<option value="Mr.">Mr.</option>
<option value="Ms.">Ms.</option>
</select>
       </div>
       <div class="form-group col-md-4" style="margin-left: -4%;
width: 39%;">
           <label for="guestFname">First Name</label>
               <input type="text" name="guestFname" class="form-control1" id="guestFname" placeholder="First Name">
        </div>
       <div class="form-group col-md-4" style="margin-left: -4%;
width: 39%;">
           <label for="guestLname">Last Name</label>
           <input type="text" name="guestLname" class="form-control1" id="guestLname" placeholder="Last Name">
        </div>
       <div class="form-group">
<label for="radio" >Gender</label><br>
<div class="radio-inline"><label><input type="radio" name="guestGender" value="male"> Male</label></div>
               <div class="radio-inline"><label><input type="radio" name="guestGender" value="female"> Female</label></div>

</div>

       </div>
   </div>
</div>
</div>

<div class="col-sm-8 w3-agileits-crd widgettable" style="margin-top: 0.7%;">

 <div class="card card-contact-list" >
<div class="agileinfo-cdr">
     <div class="card-header">
         <h3>GUEST LAPTOP INFORMATION</h3>
     </div>
     <hr class="widget-separator">

     <div class="card-body p-b-20" style="margin-top: -8%;">
        <div class="form-body">

  <div class="form-body" data-example-id="simple-form-inline" style="    margin-left: -5.5%;">
<div class="form-inline">
     <div class="form-group">
          <label for="lapBrand">Brand</label>
        <select name="guestLapBrand" id="selector1" class="form-control1">
          <option value="0">Select Brands</option>
          <option value="1">Apple MacBook</option>
          <option value="2">Toshiba</option>
          <option value="3">Dell</option>
          <option value="4">Lenovo</option>
          <option value="5">Samsung</option>
          <option value="6">Fujistu</option>
          <option value="7">Hewlett-Packard (HP)</option>
          <option value="8">Think Pad</option>
          <option value="9">Life is Goog (LG)</option>
          <option value="10">Sony</option>
          <option value="11">VIO</option>
          <option value="12">Microsoft</option>
          <option value="13">Chrome Book</option>
        </select>
     </div>
      <div class="form-group" style="width: 42.776%">
         <label for="lapModel">Model</label>
             <input type="text" name="guestLapModel" class="form-control1" id="lapModel" placeholder="Laptop Model">
     </div>
      </div>
</div>


     <div class="form-group">
         <label for="lapSerial">Serial Number</label>
             <input type="text" name="guestLapSerial" class="form-control1" id="lapSerial" placeholder="Laptop Serial Number">
      </div>
     <div class="form-group">
         <label for="lapColor">Color</label>
             <select name="guestLapColor" id="lapColor" class="form-control1">
               <option value="0">select color</option>
               <option value="1">Black</option>
               <option value="2">White</option>
               <option value="3">Red</option>
               <option value="4">Blue</option>
               <option value="5">Green</option>
</select>
      </div>
     <div class="form-group">
<label for="radio" >Serial Number Location</label><br>
<div class="radio-inline"><label><input type="radio" name="guestLpSerloc" value="undrLaptop"> Under Laptop</label></div>
             <div class="radio-inline"><label><input type="radio" name="guestLpSerloc" value="undrBattr"> Under Battery</label></div>

</div>
     </div>


 </div>
</div>
</div>

</div>

<div class="clear-fix"></div>
<div style="float:right">
   <button type="submit" class="btn btn-success btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
    <button type="button" class="btn btn-danger btn-flat btn-pri" onclick="location.reload()"><i class="fa fa-minus" aria-hidden="true"></i>Cancel</button>
   </div>

<!-- Guest Information ends here -->
<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>

  </div>

                      <!-- here -->

				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018. All Rights Reserved | Made With <span class="fa fa-heart" style="color:rgba(255, 0, 132, 1"></span> by Yohannis Kifle & Desalegn Abebaw
    </div>
        <!--//footer-->
	</div>

    <script>

        var token = '{{ Session::token() }}';
        var url = '{{ route('checkstud')  }}';

    </script>
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>

	<script src="js/classie.js"></script>

    <script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
    <script src="js/bootstrap.js"> </script>

</body>
</html>
