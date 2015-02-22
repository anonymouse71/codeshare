<div class="code-form">


	<h2>Share Some code ?</h2>
	
	<ul>
		@foreach($errors->all() as $error)
			<li>{{  $error  }}</li>
		@endforeach
	</ul>

	{{ Form::open(array('url'=>'snippets/create' , 'class'=>'form')) }}
	
		{{  Form::text('name' , null , array('class'=>'input-block-level' , 'placeholder'=>'Name (No spaces , only alpha numeric , dashes , and underscores please)')) }}
		
		{{  Form::textarea('code' , null, array('class'=> 'input-block-level' , 'placeholder'=> 
		'Enter code snippet below'))  }}

		{{  Form::select('lang' , array('php'=>'PHP' , 'js'=>'Js' , 'ruby'=>'Ruby' , 'python'=>'Python') , array('class'=>'input-block-level' , 'placeholder'=>'Language'))  }}

		{{  Form::submit('Share' , array('class'=>'btn btn-primary btn-large btn-block'))  }}

	{{  Form::close()  }}

</div>

<div class="code-display">
	<h2>Most recent snippets</h2>	
	<p>You can find the most recent shared snippets below</p>	

	<ul>
		@foreach($snippets as $snippet )
			<li>{{ HTML::link('snippets/view/'.$snippet->slug , $snippet->name) }}

			@if(Auth::check())
				{{ Form::open(array('url'=>'favorites/create' , 'class'=>'form')) }}
					{{ Form::hidden('snippet_id' , $snippet->id) }}
					{{ Form::submit('Fav it!') }}
				{{ Form::close() }}	
			@endif
			</li>
		@endforeach	
	</ul>
</div>