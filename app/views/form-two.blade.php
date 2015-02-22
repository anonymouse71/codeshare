{{ Form::open(array('url' => 'registration')) }}


	<ul class="errors">
		@foreach($errors->all() as $message)
				<li>{{ $message }}</li>
		@endforeach			
	</ul>

	{{ Form::label('username' , 'Username') }}
	{{ Form::text('username') }}

	{{ Form::label('email' , 'Email Address') }}
	{{ Form::text('email') }}

	{{ Form::label('password_confirmation' , 'Password Confirmation') }}
	{{ Form::text('password_confirmation') }}

	{{ Form::submit('Enter')}}

{{ Form::close() }}	