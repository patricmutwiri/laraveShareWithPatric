<!DOCTYPE html>
<html lang="en">
@include('header')


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <!-- <div class="page-title">
                    <h3 class="title">Datatable</h3>
                </div> -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Player Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Player Photo</th>
                                                    <th>Player Name</th>
                                                    <th>Category</th>
                                                    <th>Player Team</th>
                                                    <th>Coach Name</th>
                                                    <th>Check In</th>
                                                    <th>Pending</th>
													  <th>Status</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                            @foreach ($players as $player)
                                                <tr>
                                                    <td><a class="pull-left" href="#">

                                                     <img class="media-object thumbnail" height="100" width="100" src='public/photo/{{$player->photo}}'>
                                                    </a></td>
                                                    
                                                    <td>{{ $player->firstname }}</td>
                                                    <td>{{ $player->lastname }}</td>
                                                    <td>{{ $player->team_id }}</td>
                                                    <td>{{ $player->email    }}</td>
                                                    <td>{{ $player->rand_num    }}</td>
                                                    <td><button class="btn btn-success">Pending</button ></td>
													                              <td>0</td>


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
        </script>

    </body>

</html>
