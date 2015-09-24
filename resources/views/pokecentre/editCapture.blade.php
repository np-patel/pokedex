@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Edit: {{$capture->pokemon->name}}</h1>
		<p>You submitted this capture {{ \Carbon\Carbon::now()->diffForHumans($capture->created_at, true) }} ago</p>

		<div class="row">
		<div class="columns">
			{{-- <h1>capture pokemon</h1> --}}
		<form action="/pokecentre/captures/{{$capture->id}}" method="post" enctype="multipart/form-data" novalidate>
			{{ csrf_field() }}
			<div>
				<label for="pokemon">Who's That Pokemon</label>
				<select name="pokemon" id="pokemon">
					@foreach($allPokemon as $pokemon)

						<option value="{{$pokemon->id}}" {{ $pokemon->id == $capture->pokemon_id  ? 'selected' : '' }}>{{$pokemon->name}}</option>

					@endforeach
				</select>
				{{$errors->first('pokemon')}}
			</div>
			<div>
				<label for="photo">Photo: </label>
				<input type="file" id="photo" name="photo">
				{{$errors->first('photo')}}
			</div>
			<input type="submit" value="Update Your {{$capture->pokemon->name}}" class="tiny button">
		</form>
		</div>
	</div>
			
		
	</div>
</div>

@endsection