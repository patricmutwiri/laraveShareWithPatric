@extends('master')
@section('content')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('signup')}}" class="btn btn-primary">Sign Up</a>
  </div>
  <h4>Login</h4>
</div>
{{Form::open(['route' => 'login'])}}
  <div class="contaienr">
	<div class="form-group">
	  {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])}}
	</div>
	<div class="form-group">
	  {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}
	</div>
	<div class="form-group">
	  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
	</div class="form-group">
	<!-- <div class="forget">
		
        <a class="forgot-password" id="forgot-password" href="password/reset">Forgot Password?</a>
      
	</div> -->
</div>

{{Form::close()}}
@stop
