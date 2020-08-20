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

<script src="/js/dom-to-image.min.js"></script>
<!-- Bootstrap Core CSS -->
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />


<!-- Custom CSS -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->

 <!-- js-->
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- chart -->
<script src="/js/Chart.js"></script>
<!-- //chart -->
<!-- This is for Qrcode generating app -->
<script type="text/javascript" src="/js/qrcode.js"></script>
<!-- End of libs for Qrcode generating app-->
<!-- Metis Menu -->
<script src="/js/metisMenu.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/jquery.qrcode.min.js"></script>
<link href="/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<script type="text/javascript">

         function generateQR(stud_id,lapbrand,lapcolor,fname,lname,lapMdel){
             console.log(stud_id , lapbrand , lapcolor , fname , lname , lapMdel);
            var qrcode = new QRCode(document.getElementById("qrcode"), {
             	width : 146,
             	height : 146,
             	colorDark : "#000000",
             	colorLight : "#ffffff",
             	correctLevel : QRCode.CorrectLevel.L
             });

            var stud_Id = encrypt(stud_id);
            var lapBrand = encrypt(lapbrand);
            var lapColor = encrypt(lapcolor);
            var fName = encrypt(fname);
            var lName = encrypt(lname);
            var lapModel = encrypt(lapMdel);
            var finalCode = stud_Id+'&'+fName+' '+lName+'&'+lapBrand+'&'+lapColor;
            var len = finalCode.length;
            qrcode.makeCode(finalCode+'&'+len);
            crop();
           }

         function encrypt(text){

         	var arr = [];
         	var val;
         	for(var i=0;i<text.length;i++){
         	 val = text.charAt(i).charCodeAt(0);
         	 val+=2;
            arr[i]=String.fromCharCode(val);
           }
           return arr.join("");
          }



          </script>
          <script>

          function crop(){

        var node = document.getElementById('qrcode');

domtoimage.toPng(node)
    .then(function (dataUrl) {
        var img = new Image();
        img.src = dataUrl;
        var downName = document.getElementById("regName").innerHTML+".png";
        download(img.src,downName);
    })
    .catch(function (error) {
        console.error('oops, something went wrong!', error);
    });
     }
        function download(dataUrl, filename){

            var a = document.createElement("a");
            a.href = dataUrl;
            a.setAttribute("download",filename);
            var b = document.createEvent("MouseEvents");
            b.initEvent("click",false,true);
            a.dispatchEvent(b);
            return false;
        }

          </script>
</head>
<body class="cbp-spmenu-push" onload="generateQR('{{$laptop->laptopable->id }}','{{$laptop->brand}}','{{$laptop->color}}','{{$laptop->laptopable->first_name}}','{{$laptop->laptopable->last_name}}','{{$laptop->model}}')">
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
                <a href="{{--route('manualcheck')--}}">
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
              <li><a href="{{--route('addnewstudent')--}}"><i class="fa fa-plus-circle text-red"></i> <span>ADD NEW STUDENT</span></a></li>
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
		<!-- main content start-->
		<div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">Registration Successfull</h3>

      <div class="error-page">

          <div class="clearfix"></div>
          <div class="col-md-5" style="margin-right: 4%;">
             <p>
               .
             </p>
          </div>
          <div class="col-md-6" id="qrcode" style="
          height: 90px;
          width: 90px;
          padding-left: 0px;
          padding-right: 0px;
          border-color: #f1f1f1;
          border-style: solid;
          border-width: 6px;
          ">

          </div>
         <div class="clearfix"></div>
          <div class=""><br>
          <h3><i class="fa fa-check-square-o text-yellow" style="color:green"></i><span id="regName">  {{$laptop->laptopable->first_name}} {{$laptop->laptopable->last_name}}</span></h3>
         </div>

        <div class="bg-effect col-md-6" style="margin-left:26%">
           <ul class="bt-list">
             <li><a onclick="crop()" class="hvr-icon-down col-1">Download</a></li>
             <li><a href="{{route('home')}}" class="hvr-icon-spin col-1" style="background-color:#f98b02 !important">Home</a></li>
           </ul>

        </div><br>

          <p>Please Don't forget to either download or save QR code before you proceed to any process. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you!</p>
        </div>
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

    <script src="/js/Chart.bundle.js"></script>
    <script src="/js/utils.js"></script>


		<script src="/js/classie.js"></script>

	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="/js/jquery.nicescroll.js"></script>
	<script src="/js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->


	<!-- for index page weekly sales java script -->
	<script src="/js/SimpleChart.js"></script>
	<!-- Bootstrap Core JavaScript -->
   <script src="/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>
