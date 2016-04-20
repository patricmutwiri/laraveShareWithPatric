<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon"  href="{{HTML::image('img/favicon_1.ico')}}">


        <title>Greensports</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>

        <!-- Bootstrap core CSS -->
        {{HTML::style('css/bootstrap.min.css')}}
	        {{HTML::style('css/bootstrap-reset.css')}}
      
     

        <!--Animation css-->
	  {{HTML::style('css/animate.css')}}
 

        <!--Icon-fonts css-->
	  {{HTML::style('assets/font-awesome/css/font-awesome.css')}}
	  {{HTML::style('assets/ionicon/css/ionicons.min.css')}}
       
		  {{HTML::style('assets/morris/morris.css')}}
	  {{HTML::style('assets/sweet-alert/sweet-alert.min.css')}}

       
        <!-- Icons -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


        <!--Form Wizard-->
        {{HTML::style('assets/form-wizard/jquery.steps.css')}}

        
        <!-- Custom styles for this template -->
	  {{HTML::style('css/style.css')}}
	  {{HTML::style('css/helper.css')}}
       
	{{HTML::style('css/style-responsive.css')}}

        <!-- DataTables -->
        {{HTML::style('assets/datatables/jquery.dataTables.min.css')}}
	  

<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-62751496-1', 'auto');
          ga('send', 'pageview');

        </script>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

     <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index-2.html" class="logo-expanded">
                <img src="{{URL::asset('assets/img/logo3.png')}}" width="50px" height="40px">
                    <span class="nav-label">Greensports</span>
                </a>
            </div>
            <!-- / brand -->

            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="has-submenu active"><a href="{{URL::to('owners')}}"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
					 <li class="has-submenu active"><a href=""><i class="ion-person-stalker"></i> <span class="nav-label">The Teams</span></a>
					
					      <li class=""><a href="{{URL::to('team_registration')}}">Add New</a>
                    </li>
					      <li class=""><a href="{{URL::to('view')}}">View Profiles</a>
                    </li>
							  <li class="has-submenu active"><a href=""><i class="ion-person-stalker"></i> <span class="nav-label">The Players</span></a>
					
					      <li class=""><a href="{{URL::to('player_registration')}}">Add New</a>
                    </li>
					      <li class=""><a href="{{URL::to('players_details')}}">View Profiles</a>
                    </li>
                 
                 
                
                     <li><a href="{{URL::to('verification')}}"><i class="ion-ios-paper"></i> <span class="nav-label">Player Verification 2015</span></a>
                    </li>

                </ul>
            </nav>

        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">

            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Search -->

                <!-- Search -->
                <!-- <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                </form> -->

                 {{Form::open(['route' => 'search', 'method' => 'GET', 'class' => 'navbar-left app-search pull-left hidden-xs', 'role'=> 'search'])}}
                    <div class="form-group">
                      {{Form::text('search_term', null, ['class' => 'form-control', 'placeholder' => 'search'])}}
                    </div>
                    <!-- {{Form::submit('Search', ['class' => 'btn btn-primary'])}} -->
                    {{Form::close()}}
                <!-- <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                </form>

                <!-- Left navbar -->

                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">
                    <!-- mesages -->
                    <li class="dropdown">
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="{{HTML::image('img/avatar-3.jpg')}} "class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="{{HTML::image('img/avatar-3.jpg')}}" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="{{HTML::image('img/avatar-4.jpg')}}" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /messages -->
                    <!-- Notification -->
                    <li class="dropdown">
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                            <li class="noti-header">
                                <p>Notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                    <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                    <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                    <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                </a>
                            </li>

                            <li>
                                <p><a href="#" class="text-right">See all notifications</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /Notification -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                            <span class="username">{{Auth::check('firstname')}} </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                           
                            <li><a href="{{URL::to('logout')}}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->