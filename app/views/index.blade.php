<!DOCTYPE html>
<html lang="en">
@include('header')
    <body>

       


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title">
                    <h3 class="title">Welcome !</h3>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-pink">
                            <i class="ion-eye"></i>
                            <h2 class="m-0 counter">{{$count}}</h2>
                            <div>Active Members</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-purple">
                            <i class="ion-paper-airplane"></i>
                            <h2 class="m-0 counter">{{$count}}</h2>
                            <div>Registered Teams</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-info">
                            <i class="ion-ios7-pricetag"></i>
                            <h2 class="m-0 counter">{{$count_player}}</h2>
                            <div>Registered Players</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-success">
                            <i class="ion-android-contacts"></i>
                            <h2 class="m-0 counter">{{$count}}</h2>
                            <div>Team Owners</div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                2015 © greendportsafrica.
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
        @include('footer')


        
    </body>

<!-- Mirrored from coderthemes.com/velonic/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Sep 2015 23:22:40 GMT -->
</html>
