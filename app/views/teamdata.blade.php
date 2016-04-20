<!DOCTYPE html>
<html lang="en">
@include('header')

            <div class="wraper container-fluid">
                <!-- <div class="page-title">
                    <h3 class="title">Datatable</h3>
                </div> -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Teams Teams</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
							@if (Session::has('message'))
                                 <div class="alert alert-info" style="height:40px; margin-left:5px; border-radius:5px; margin-bottom:3px;font-weight:bold;">{{Session::get('message') }}</div>
                                    @endif
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Team Name</th>
                                                    <th>Team Captain</th>
                                                    <th> Team Location</th>
                                                    <th>Player name</th>
                                                    <th>Player Unique no</th>
                                                    <th>player Phone</th>
                                                    <th>player Photos</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($teams as $team)
                                                <tr>
                                                    <td>{{ $team->teamname }}</td>
                                                    <td>{{ $team->captain1 }}</td>
                                                    <td>{{ $team->location }}</td>
                                                    <td>{{ $team->firstname }}</td>
                                                    <td>{{ $team->rand_num }}</td>
                                                    <td>{{ $team->phone   }}</td>

                                                    

                                                </tr>

                                               @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->



            </div>

            @include('footer')
    </body>

</html>
