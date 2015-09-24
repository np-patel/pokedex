@extends('master')

@section('content')

	<div class="row">
		<div class="columns">
			<h1><small>Pokemon #{{$pokemon->id}}:</small> {{$pokemon->name}}</h1>

			@foreach($pokemon->capture as $capture)
				<img src="/img/captures/{{$capture->photo}}" alt="pic of pokemon">
				<figcaption>

				Caught by {{$capture->user->name}}

				</figcaption>
			@endforeach

		</div>
	</div>

@endsection