@extends('master')
@section('content')

@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@endif
 
{{ Form::open(array('route' => array('password.update', $token))) }}
 <div class="contaienr">

  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 <div class="form-group">
  <p>{{ Form::label('password', 'Password') }}
  {{ Form::text('password') }}</p>
  </div>
 
  <p>{{ Form::label('password_confirmation', 'Password confirm') }}
  {{ Form::text('password_confirmation') }}</p>
 
  {{ Form::hidden('token', $token) }}
 
  <p>{{ Form::submit('Submit') }}</p>
  </div>
  </div>
 
{{ Form::close() }}

@stop