<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
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

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head>
<body class="cbp-spmenu-push">
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
                        <form class="input" method="get"  action="{{route('search')}}">
                            <input class="sb-search-input input__field--madoka" name="q" placeholder="Search..." type="search" id="input-31" />
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
                                            <p>Yohannes Kifle</p>
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
	<!-- //header-ends -->
		<div>
        <!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="widget-shadow">
					<div class="panel-default" style="padding-bottom: 0.1%">
						<div class="form-body" data-example-id="simple-form-inline">
							<form class="form-inline" action="{{route('search')}}" method="get">
                                <div class="form-group">

             <input type="Text" name="q" class="form-control" id="exampleInputEmail2" placeholder="Search Laptop by:  Name,Student ID and Serial Number" style="height:38px;width:460px;font-size:18px">
                                </div>
                                <div class="form-group" style="margin-top:-2%">
                                     <label for="lapBrand">WHO?</label>
                                   <select name="serchWho" id="selector1" class="form-control1">
                                       <option value="none">SELECT</option>
                                       <option value="stud">STUDENT</option>
                                       <option value="staff">STAFF</option>
                                       <option value="guest">GUEST</option>
                                   </select>
                                </div>
                                <button type="submit" class="btn btn-default"><span class="fa fa-search"></span> Search</button>
                              </form>
						</div>
                        <div class="panel-heading">
							SEARCH RESULT
						</div>

			 	<div class="inbox-page row">
          @if(isset($who))
          @if($who=="stud")
             @foreach($studLaps as $res)
             <div class="inbox-row widget-shadow">

               <div class="mail mail-name"><h6> STUDENT</h6></div>
               <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$res->id}}" aria-expanded="true" aria-controls="collapsenine">
                 <div class="mail"><p>YOHANNES KIFLE: TOSHIBA PAVILLION</p></div>
               </a>
               <div class="mail-right dots_drop">
                 <div class="dropdown">
                   <a href="#"  data-toggle="dropdown" aria-expanded="false">
                     <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                   </a>
                   <ul class="dropdown-menu float-right">
                     <li>
                       <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$res->id}}" aria-expanded="true" aria-controls="collapseNine">
                         <i class="fa fa-reply mail-icon"></i>
                         Report Lost
                       </a>
                     </li>
                     <li>
                       <a href="#" class="font-red" title="">
                         <i class="fa fa-trash-o mail-icon"></i>
                         Delete
                       </a>
                     </li>
                   </ul>
                 </div>
               </div>
               <div class="mail-right"><p>29th Nov</p></div>
               <div class="clearfix"> </div>
               <div id="collapse{{$res->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
                 <div class="mail-body">
                   <div class="col-md-5">
                                     <div class="panel-heading">
                       <p>OWNER Info</p>
                         </div>
                                       <div>
                                       <P>FULL NAME: <span>{{$res->student-Fname}} KIFLE</span> </P>
                                       <P>DEPT: <span>CSE</span> </P>
                                       </div>

                                   </div>

                                   <div class="col-md-7">
                                      <div class="panel-heading">
                       <p>Laptop Info</p>
                         </div>
                                       <div>
                                       <P>BAND: <span>APPLE</span> </P>
                                       <P>MODEL: <span>{{$res->model}}</span> </P>
                                       <P>SERIAL: <span>{{$res->ser_number}}</span> </P>
                                       <P>SERIAL LOCATION: <span>{{$res->ser_loc}}</span> </P>
                                       <P>COLOR: <span>BLACK</span>{{$res->color}}</P>
                                       </div>

                                   </div>
                   <form>

                                       <button type="submit" class="btn btn-success">Generate QRcode</button>
                                       <button type="submit" class="btn btn-success">Report Lost</button>

                   </form>
                 </div>
               </div>
             </div>

             @endforeach

          @elseif($who=="staff")
          @foreach($staffLaps as $res)
          <div class="inbox-row widget-shadow">

            <div class="mail mail-name"><h6> STAFF</h6></div>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapsenine">
              <div class="mail"><p>YOHANNES KIFLE: TOSHIBA PAVILLION</p></div>
            </a>
            <div class="mail-right dots_drop">
              <div class="dropdown">
                <a href="#"  data-toggle="dropdown" aria-expanded="false">
                  <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                </a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                      <i class="fa fa-reply mail-icon"></i>
                      Report Lost
                    </a>
                  </li>
                  <li>
                    <a href="#" class="font-red" title="">
                      <i class="fa fa-trash-o mail-icon"></i>
                      Delete
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mail-right"><p>29th Nov</p></div>
            <div class="clearfix"> </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
              <div class="mail-body">
                <div class="col-md-5">
                                  <div class="panel-heading">
                    <p>OWNER Info</p>
                      </div>
                                    <div>
                                    <P>FULL NAME: <span>YOHANNES KIFLE</span> </P>
                                    <P>DEPT: <span>CSE</span> </P>
                                    </div>

                                </div>

                                <div class="col-md-7">
                                   <div class="panel-heading">
                    <p>Laptop Info</p>
                      </div>
                                     <div>
                                    <P>BAND: <span>APPLE</span> </P>
                                    <P>MODEL: <span>MODEL 0012</span> </P>
                                    <P>SERIAL: <span>AC45XC4XC034</span> </P>
                                    <P>SERIAL LOCATION: <span>UNDER LAPTOP</span> </P>
                                    <P>COLOR: <span>BLACK</span> </P>
                                    </div>

                                </div>
                <form>

                                    <button type="submit" class="btn btn-success">Generate QRcode</button>
                                    <button type="submit" class="btn btn-success">Report Lost</button>

                </form>
              </div>
            </div>
          </div>

          @endforeach
          @else
          @foreach($guestLaps as $res)
          <div class="inbox-row widget-shadow">

            <div class="mail mail-name"><h6> STAFF</h6></div>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapsenine">
              <div class="mail"><p>YOHANNES KIFLE: TOSHIBA PAVILLION</p></div>
            </a>
            <div class="mail-right dots_drop">
              <div class="dropdown">
                <a href="#"  data-toggle="dropdown" aria-expanded="false">
                  <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                </a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                      <i class="fa fa-reply mail-icon"></i>
                      Report Lost
                    </a>
                  </li>
                  <li>
                    <a href="#" class="font-red" title="">
                      <i class="fa fa-trash-o mail-icon"></i>
                      Delete
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mail-right"><p>29th Nov</p></div>
            <div class="clearfix"> </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
              <div class="mail-body">
                <div class="col-md-5">
                                  <div class="panel-heading">
                    <p>OWNER Info</p>
                      </div>
                                    <div>
                                    <P>FULL NAME: <span>YOHANNES KIFLE</span> </P>
                                    <P>DEPT: <span>CSE</span> </P>
                                    </div>

                                </div>

                                <div class="col-md-7">
                                   <div class="panel-heading">
                    <p>Laptop Info</p>
                      </div>
                                     <div>
                                    <P>BAND: <span>APPLE</span> </P>
                                    <P>MODEL: <span>MODEL 0012</span> </P>
                                    <P>SERIAL: <span>AC45XC4XC034</span> </P>
                                    <P>SERIAL LOCATION: <span>UNDER LAPTOP</span> </P>
                                    <P>COLOR: <span>BLACK</span> </P>
                                    </div>

                                </div>
                <form>

                                    <button type="submit" class="btn btn-success">Generate QRcode</button>
                                    <button type="submit" class="btn btn-success">Report Lost</button>

                </form>
              </div>
            </div>
          </div>

          @endforeach
          @endif
          @endif






 			    </div>

			</div>
				</div>
				<div class="clearfix"> </div>
			</div>

			</div>
		</div>
		<!--footer-->
    <div class="footer">
		   <p>&copy; 2018. All Rights Reserved | Made With <span class="fa fa-heart" style="color:rgba(255, 0, 132, 1"></span> by Yohannis Kifle & Desalegn Abebaw
    </div>
        <!--//footer-->
	</div>

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>

</body>
</html>
