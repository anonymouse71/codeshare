<h2>Your Favorites</h2>

<ul>
@foreach($favorites as $favorite)	
	<li>
		{{ HTML::link('snippet/view'.$favorite->snippet->slug , $favorite->snippet->name)  }}
	</li>
@endforeach
</ul>