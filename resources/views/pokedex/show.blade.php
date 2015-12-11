@extends('master')

@section('content')

	<div class="row">
		<div class="columns">
			<h1><small>Pokemon #{{$pokemon->id}}:</small> {{$pokemon->name}}</h1>

			@foreach($pokemon->capture as $capture)
				<img src="/img/captures/{{$capture->photo}}" alt="pic of pokemon">
				<figcaption>

				Caught by {{$capture->user->name}}
				<ul>
					<li>Found in {{$capture->location}}</li>
					<li>Attack level {{$capture->attack}}</li>
					<li>Defense level {{$capture->defense}}</li>
				</ul>
				</figcaption>

				<h2>Votes</h2>
				<ul>
					<li>{{$capture->vote->where('vote', 'true')->count()}}</li>
					<li>{{$capture->vote->where('vote', 'false')->count()}}</li>
				</ul>

				@if(\Auth::check() && $capture->user_id == \Auth::user()->id)
					<a href="/pokecentre/captures/{{$capture->id}}/edit" class="tiny button">Edit your {{$capture->pokemon->name}} </a>
				@endif

				@if(\Auth::check() )
					<a href="/pokedex/vote/{{$capture->id}}/up" class="tiny button"> Up-Vote </a>

					<a href="/pokedex/vote/{{$capture->id}}/down" class="tiny button"> Down-Vote </a>
				@endif

			@endforeach

		</div>
	</div>

@endsection