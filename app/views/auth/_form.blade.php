<div class="contaienr">
	<div class="form-group">
	  {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])}}
	</div>
	<div class="form-group">
	  {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}
	</div>
	<div class="form-group">
	  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
	</div>
</div>
