<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- <link rel="shortcut icon"  href="{{HTML::image('img/favicon_1.ico')}}"> -->


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

        <!--Morris Chart CSS -->


        <!-- sweet alerts -->
        
        <!-- Custom styles for this template -->
      {{HTML::style('css/style.css')}}
      {{HTML::style('css/helper.css')}}
       
          {{HTML::style('css/style-responsive.css')}}
      

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


    <body>

        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading">
                   <h3 class="text-center m-t-10"> Sign In to <strong>GreenSports</strong> </h3>
                </div>

                <div class="form-horizontal m-t-40">
                  @include('errors')
                  {{Form::open(['route' => 'login'])}}
                    <div class="form-group ">
                        <div class="col-xs-12">
                            {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])}}
                        </div>
                    </div>
                    <div class="form-group ">

                        <div class="col-xs-12">
                          {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" checked>
                                <i class="fa"></i>
                                Remember me
                            </label>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <div class="col-xs-12">
                          <!-- Kindly use either the button code commented bellow -->
                          <!-- <button class="btn btn-purple w-md" type="submit">Log In</button> -->
                            {{Form::submit('Submit', ['class' => 'btn btn-purple w-md'])}}
                        </div>
                    </div>
                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="signup">Create an account</a>
                        </div>
                    </div>
                 {{Form::close()}}
                </div>

            </div>
        </div>




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="assets/js/jquery.app.js"></script>


    </body>

<!-- Mirrored from coderthemes.com/velonic/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Sep 2015 23:24:19 GMT -->
</html>
