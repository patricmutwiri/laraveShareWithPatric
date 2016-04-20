<!DOCTYPE html>
<html lang="en">
    @include('header')
    {{HTML::style('assets/form-wizard/jquery.steps.css')}}



            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <!-- Vertical Steps Example -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Player Registration</h3>
                            </div>
                            @include('errors')
                              {{Form::open(['route' => 'players.store', 'method'=>'POST', 'files' => True])}}
                              <div class="panel-body">
                                <div id="wizard-vertical">
                                    <h3>Basic Details</h3>
                                    <section>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label " for="firstName">First Name *</label>
                                          <div class="col-lg-9">
                                        {{Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Enter your first name'])}}</div>
                                      </div>

                                      <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label " for="lastName">Last Name *</label>
                                          <div class="col-lg-9">
                                          {{Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Enter your last name'])}}</div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label " for="phoneNumber">Phone number*</label>
                                          <div class="col-lg-9">
                                          {{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
                                          </div>
                                          </div>

                                      <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label " for="idNumber">Passport/ID No.:</label>
                                          <div class="col-lg-9">
                                         {{Form::text('id_no', null, ['class' => 'form-control', 'placeholder' => 'Enter Passport/ID No'])}}

                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label " for="email">Emails</label>
                                          <div class="col-lg-9">
                                         {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your Email Addr'])}}
                                         </div>
                                          
                                      </div>


                                    </section>
                                    <h3>Profile Details</h3>
                                    <section>
                                    <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label">category</label>
                                          <div class="col-lg-9">
                                          <select class="form-control" name="category">
                                              <option>----Select Here---</option>
                                              <option>Under 15 Men</option>
                                              <option>Under 18 Men</option>
                                              <option>Under 23 Men</option>
                                              <option>Under 23 women</option>
                                          </select>
                                      </div>
                                      </div>
                                    <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label">Select Team Name</label>
                                          <div class="col-lg-9">
                                              <select name="team_id" id="parent_cat">
                                                 @foreach($teams as $team)
                                                 <option value="{{ $team->teamname }}">{{ $team->teamname }}</option>
                                                 @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label " for="residence">Residence *</label>
                                          <div class="col-lg-9">
                                         {{Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Enter your place of stay'])}}

                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label " for="residence">School Name *</label>
                                          <div class="col-lg-9">
                                         {{Form::text('school', null, ['class' => 'form-control', 'placeholder' => 'Enter your school '])}}

                                          </div>
                                      </div>
                                    
                                        <div class="form-group clearfix">
                                          <label class="col-lg-3 control-label">Date of Birth</label>
                                          <div class="col-lg-9">
                                         {{Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Enter your date of birth'])}}
                                          </div>
                                      </div>

                                    


                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-4 control-label">Players Photo</label>
                                          <div class="col-lg-8">
                                           <p>Kindly ensure you have filled all the required fields</p>
                                            {{Form::file('photo', null, ['class' => 'form-control'])}}
                                            
                                          </div>
                                      </div>
                                     
                                      <div class="form-group" class="pull-right">
                                    {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                                  </div>
                                    </section>

                                </div> <!-- End #wizard-vertical -->
                               </div>  <!-- End panel-body -->
                            {{Form::close()}}
                        </div> <!-- End panel -->

                    </div> <!-- end col -->

                </div> <!-- End row -->
            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

           @include('footer')
    </body>

<!-- Mirrored from coderthemes.com/velonic/admin/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Sep 2015 23:23:42 GMT -->
</html>
