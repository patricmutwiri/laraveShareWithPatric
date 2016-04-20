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
    <div class="alert alert-info" style="height:40px; margin-left:5px; border-radius:5px; margin-bottom:3px; font-weight:bold;">{{Session::get('message') }}</div>
@endif
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Team Name</th>
                                                    <th>Team Type</th>
                                                    <th>Team Location</th>
                                                    <th>Team Captain Name</th>
                                                    <th>Team Phone</th>
                                                    <th>Team Email</th>
                                                    <th>Edit</th>
													  <th>Delete</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($teams as $team)
                                                <tr>
                                                    <td>{{ $team->teamname }}</td>
                                                    <td>{{ $team->category }}</td>
                                                    <td>{{ $team->location }}</td>
                                                    <td>{{ $team->captain1 }}</td>
                                                    <td>{{ $team->phone1   }}</td>
                                                    <td>{{ $team->email1   }}</td>

                                                    <td> <a class="btn btn-small btn-success" href="{{ route('users.edit', 
                                                            array($team->id)) }}">Edit</a> 
                                                          
                                                    
                                                    </td>
													  <td> 
                                                            {{ Form::open(array('route' => array('users.destroy', $team->id), 'method' => 'delete')) }}
                                                                    <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                                             {{ Form::close() }}
                                                    
                                                    </td>
                                                     <td> 
                                                            {{ Form::open(array('route' => array('players.show', $team->id), 'method' => 'get')) }}
                                                                    <button type="submit" class="btn btn-primary btn-mini">More..</button>
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
