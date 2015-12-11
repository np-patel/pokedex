@extends('master')

@section('content')

<div class="row">
	<div class="columns">

	@if( Session::get('release'))
		<div data-alert class="alert-box success radius">
		  {{Session::get('release')}}
		  <a href="#" class="close">&times;</a>
		</div>
	@endif
		<h1>Your captures</h1>

		
			@forelse($captures as $capture)
			
				<div class="medium-4 columns">
					<img src="/img/captures/{{$capture->photo}}" alt="pic of pokemon">
				<ul>
					<h2>{{$capture->pokemon->name}}</h2>
					Caught by {{$capture->user->name}}
					<li>Found in {{$capture->location}}</li>
					<li>Attack level {{$capture->attack}}</li>
					<li>Defense level {{$capture->defense}}</li>
				</ul>
					<a href="/pokecentre/captures/{{$capture->id}}/edit" class="tiny button">Edit your {{$capture->pokemon->name}} </a>
					<a href="/pokecentre/captures/{{$capture->id}}/release" class="tiny button alert">resease your {{$capture->pokemon->name}} </a>
				</div>

			
			
			@empty
				<p>you have not caught any pokemon</p>
			@endforelse
		
	</div>
</div>

@endsection