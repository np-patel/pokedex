@extends('master')
			

@section('content')

	<div class="row">
		<div class="columns">
			<h1><small>Release Your {{$capture->pokemon->name}}</h1>

			<a href="/pokecentre/captures/{{$capture->id}}/doRelease" class="tiny alert button">Yes</a>
			<a href="/pokecentre/captures" class="tiny button">No</a>


			

		</div>
	</div>

@endsection