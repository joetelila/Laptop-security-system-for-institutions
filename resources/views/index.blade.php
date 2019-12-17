<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->

 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc368',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
             $('#demo-pie-4').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
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
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa  fa-group icon-rounded" style="background-color: #70df99 !important;"></i>
                    <div class="stats">
                      <h5><strong>{{$totStuds}}</strong></h5>
                      <span>TOTAL STUDENTS </span>
                    </div>
                </div>
        	</div>
            <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$totalLaps}}</strong></h5>
                      <span>TOTAL REGISTERED LAPTOPS </span>
                    </div>
                </div>
        	</div>
            <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$totguestLaps}}</strong></h5>
                      <span>TOTAL GUEST LAPTOPS </span>
                    </div>
                </div>
        	</div>
            <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa  fa-laptop icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$totstaffLaps}}</strong></h5>
                      <span>TOTAL STAFF LAPTOPS </span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-list-ul icon-rounded" style="background-color: #f7c267 !important;"></i>
                    <div class="stats">
                      <h5><strong>{{$totstudLaps}}</strong></h5>
                      <span>TOTAL STUDENT LAPTOPS</span>
                    </div>
                </div>
        	</div>
            <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-umbrella icon-rounded" style="background-color: #702871 !important;"></i>
                    <div class="stats">
                      <h5><strong>{{$totLostLaps}}</strong></h5>
                      <span>TOTAL LOST LAPTOPS </span>
                    </div>
                </div>
        	</div>
        	<div class="clearfix"> </div>
		   </div>


		<div class="row-one widgettable" style="margin-left: -14px;">

            <div class="col-md-3 stat">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Toshiba</h5>
					<label>{{$totToshiba}}</label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-1" class="pie-title-center" data-percent="{{$toshPerc}}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 stat">
               <div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Dell</h5>
					<label>{{$totDell}}</label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-2" class="pie-title-center" data-percent="{{$dellPerc}}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>
            <div class="col-md-3 stat">
              	<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Samsung</h5>
					<label>{{$totSamsung}}</label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-3" class="pie-title-center" data-percent="{{$samPerc}}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>
            <div class="col-md-3 stat">
              	<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Others</h5>
					<label>{{$totalRest}}</label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-4" class="pie-title-center" data-percent="{{$restPerc}}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>

       	<div class="clearfix"> </div>
		</div>

                 <div class="tables">

                     <div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Recently Reported Lost</h4>
						<table class="table table-hover">
							<thead>
							<tr> <th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Username</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Yohannes</td>
								<td>Kifle</td>
								<td>CSE</td>
								<td>3yr</td>
								<td>Toshiba</td>
								<td>Pavillion</td>
								<td>01/12/2018</td>
								<td>@</td>
							</tr>
							</tbody>
						</table>
					</div>


                 </div>






			</div>
		</div>
	<!--footer-->
  <div class="footer">
     <p>&copy; 2018. All Rights Reserved | Made With <span class="fa fa-heart" style="color:rgba(255, 0, 132, 1"></span> by Yohannis Kifle & Desalegn Abebaw
  </div>
    <!--//footer-->
	</div>

	<!-- new added graphs chart js-->

    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>


		<script src="js/classie.js"></script>

	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>


	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>



	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>
