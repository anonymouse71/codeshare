
{{ Form::open(array('url'=>'users/signin' , 'class'=>'form-signin')) }}
  
  	<h2 class="form-signin-heading">Sign in</h2>

  	{{  Form::text('username' , null , array('class'=>'input-block-level' , 'placeholder' => 'Username'))  }}
  	{{ Form::password('password' , array( 'class'=>'input-block-level' , 'placeholder'=>'Password')) }}

  	{{  Form::submit('submit' , array('class'=>'btn btn-large btn-primary btn-block'))  }}
{{ Form::close() }}