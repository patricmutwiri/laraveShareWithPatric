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
                                <h3 class="panel-title">Player Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
										       @if (Session::has('message'))
    <div class="alert alert-info" style="height:40px; margin-left:5px; border-radius:5px; margin-bottom:3px; font-weight:bold;">{{Session::get('message') }}</div>
@endif
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Player First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Player Team</th>
                                                    <th>Player Contact Mail</th>
                                                    <th>player Phone</th>
                                                    <th>Residence</th>
                                                    <th>Edit</th>
													  <th>Delete</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                 @foreach ($players as $player)
                                                <tr>
                                                    <td>{{ $player->firstname }}</td>
                                                    <td>{{ $player->lastname }}</td>
                                                    <td>{{ $player->team_id }}</td>
                                                    <td>{{ $player->email    }}</td>
                                                    <td>{{ $player->phone    }}</td>
                                                    <td>{{ $player->location }}</td>

                                                    <td>
                                                        <a class="btn btn-small btn-success" href="{{ route('players.edit', 
                                                             array($player->id)) }}">Edit</a> 
                                                            
                                                    </td>
													       <td>
                                                        
                                                            {{ Form::open(array('route' => array('players.destroy', $player->id), 'method' => 'delete')) }}
                                                                    <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                                             {{ Form::close() }}
                                                 
                                                    </td>
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
