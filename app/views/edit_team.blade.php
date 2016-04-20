<!DOCTYPE html>
<html lang="en">

@include('header');

<body>


    <div class="wraper container-fluid">
        <div class="page-title">
            <h3 class="title">Team Registration</h3>
        </div>
        <div class="row">
            <!-- Basic example -->
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Team Details</h3></div>
                    <div class="panel-body">
                        @include('errors')
                        {{ Form::model($team, array('route' => array('users.update', $team->id), 'method' => 'PUT')) }}
                        <div class="form-group">
                            <label>Team Name</label>
                            {{Form::text('teamname', null, ['class' => 'form-control', 'placeholder' => 'Name'])}}

                        </div>

                        <div class="form-group">
                            <label >Location</label>
                            {{Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Enter location of the team'])}}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select class="form-control" name="category">
                                <option>----Select Here---</option>
                                <option>Under 15 Men</option>
                                <option>Under 18 Men</option>
                                <option>Under 23 Men</option>
                                <option>Under 23 women</option>
                            </select>
                        </div>
                        <br>
                        <div class="panel-heading"><h3 class="panel-title">Contact Details 1</h3></div>
                        <br>
                        <div class="form-group">
                            <label >Team Captain/Coach</label>
                            {{Form::text('captain1', null, ['class' => 'form-control', 'placeholder' => 'Enter Captain/Coach'])}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            {{Form::email('email1', null, ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">Phone Number</label>
                            {{Form::text('phone1', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone number'])}}
                        </div>
                        <br>
                        <div class="panel-heading"><h3 class="panel-title">Contact Details 2 (Optional)</h3></div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputName">Team Captain/Coach</label>
                            {{Form::text('captain2', null, ['class' => 'form-control', 'placeholder' => 'Enter Captain/Coach'])}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            {{Form::email('email2', null, ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">Phone Number</label>
                            {{Form::text('phone2', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone number'])}}
                        </div>
                        <hr>
                    
                        <button type="submit" class="btn btn-purple">Submit</button>

                        {{Form::close()}}

                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->

            <!-- Horizontal form -->
            <div class="col-md-6">
                <div class="panel affix">
                    <div class="panel-heading">
                        <h4 class="panel-title">Team Registration Statistics </h4>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group list-group-lg">
                            <li class="list-group-item b-0">
<!-- <a href="#" class=" m-r-10">
<img src="img/avatar-8.jpg" class="thumb-sm br-radius" alt="member">
</a> -->
<span class="pull-right label bg-primary inline m-t-10">300</span>
<a href="#">Under 15 men</a>
</li>
<li class="list-group-item b-0">
<!-- <a href="#" class=" m-r-10">
<img src="img/avatar-5.jpg" class="thumb-sm br-radius" alt="member">
</a> -->
<span class="pull-right label bg-info inline m-t-10">300</span>
<a href="#">Under 18 Men</a>
</li>
<li class="list-group-item b-0">
<!-- <a href="#" class=" m-r-10">
<img src="img/avatar-6.jpg" class="thumb-sm br-radius" alt="member">
</a> -->
<span class="pull-right label bg-warning inline m-t-10">30</span>
<a href="#">Under 23 Men</a>
</li>
<li class="list-group-item b-0">
<!-- <a href="#" class=" m-r-10">
<img src="img/avatar-9.jpg" class="thumb-sm br-radius" alt="member">
</a> -->
<span class="pull-right label bg-warning inline m-t-10">500</span>
<a href="#">Under 23 Women</a>
</li>
</ul>
</div> <!--Panel-body -->
</div> <!-- col -->
</div> <!-- End row -->
</div>
<!-- Page Content Ends -->
<!-- ================== -->

<!-- Footer Start -->
<footer class="footer">
    2015 © Greensport.
</footer>
<!-- Footer Ends -->



</section>
<!-- Main Content Ends -->



<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/chat/moment-2.2.1.js"></script>

<!-- Counter-up -->
<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>

<!-- EASY PIE CHART JS -->
<script src="assets/easypie-chart/easypiechart.min.js"></script>
<script src="assets/easypie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/easypie-chart/example.js"></script>


<!--C3 Chart-->
<script src="assets/c3-chart/d3.v3.min.js"></script>
<script src="assets/c3-chart/c3.js"></script>

<!--Morris Chart-->
<script src="assets/morris/morris.min.js"></script>
<script src="assets/morris/raphael.min.js"></script>

<!-- sparkline -->
<script src="assets/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/sparkline-chart/chart-sparkline.js" type="text/javascript"></script>

<!-- sweet alerts -->
<script src="assets/sweet-alert/sweet-alert.min.js"></script>
<script src="assets/sweet-alert/sweet-alert.init.js"></script>

<script src="js/jquery.app.js"></script>
<!-- Chat -->
<script src="js/jquery.chat.js"></script>
<!-- Dashboard -->
<script src="js/jquery.dashboard.js"></script>

<!-- Todo -->
<script src="js/jquery.todo.js"></script>


<script type="text/javascript">
/* ==============================================
Counter Up
=============================================== */
jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 100,
        time: 1200
    });
});
</script>


</body>

</html>
