@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Your captures</h1>

		
			@forelse($captures as $capture)
			
				<div class="medium-4 columns">
					<img src="/img/captures/{{$capture->photo}}" alt="pic of pokemon">
					<a href="/pokecentre/captures/{{$capture->id}}/edit" class="tiny button">Edit This Submition</a>
				</div>

			
			
			@empty
				<p>you have not caught any pokemon</p>
			@endforelse
		
	</div>
</div>

@endsection