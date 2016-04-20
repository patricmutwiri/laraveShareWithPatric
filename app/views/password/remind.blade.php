@extends('master')
@section('content')

<div class="page-header">
  <div class="pull-left">
  <h4>Email</h4>
  </div>
  
</div>

@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@elseif (Session::has('success'))
  An email with the password reset has been sent.
@endif
 
{{ Form::open(array('route' => 'password.request')) }}
<div class="contaienr">
	<div class="form-group">
  	{{ Form::text('email') }}</p>
	</div>
 
	<div class="form-group">
		<p>{{ Form::submit('Submit') }}</p>
	</div>
</div>

 
{{ Form::close() }}

@stop