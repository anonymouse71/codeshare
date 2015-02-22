{{ Form::open(array('url'=>'users/signup' , 'class'=>'form-signup')) }}

	<h2 class="form-signup-heading">Sign up</h2>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach	
	</ul>

	{{ Form::text('username' , null , array('class'=>'input-block-level' , 'placeholder'=>'Username' )) }}
	{{ Form::password('password' , array('class'=>'input-block-level' , 'placeholder'=>'Password' )) }}
	{{ Form::password('password_confirmation' , array('class'=>'input-block-level' , 'placeholder' => 'Confirm password') )}}

{{ Form::submit('Sign up' , array('class'=>'btn btn-primary btn-block btn-large')) }}
{{ Form::close() }}