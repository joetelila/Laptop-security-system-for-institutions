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
                <h1><a class="navbar-brand" href="{{--route('home')--}}"><span class="fa fa-qrcode"></span> ASTU<span class="dashboard_text">Laptop Manager Admin</span></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                  <a href="{{--route('home')--}}">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="{{--route('register')--}}">
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
                                    <span class="prfil-img"><img src="images/4.jpg" alt="" height="44" width="44"> </span>
                                    <div class="user-name">
                                        <p>{{-- \Illuminate\Support\Facades\Auth::user()->first_name --}} {{-- \Illuminate\Support\Facades\Auth::user()->last_name --}}</p>
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
                                <li> <a href="{{-- route('logout')--}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="clearfix"> </div>
    </div>
