@extends('master')

@section('content')

	<div class="row">
		<div class="columns">
			<h1>capture pokemon</h1>
		<form action="/pokecentre/capture" method="post" enctype="multipart/form-data" novalidate>
			{{ csrf_field() }}
			<div>
				<label for="pokemon">Who's That Pokemon</label>
				<select name="pokemon" id="pokemon">
					@foreach($allPokemon as $pokemon)
					<option value="{{$pokemon->id}}">{{$pokemon->name}}</option>
					@endforeach
				</select>
				{{$errors->first('pokemon')}}
			</div>

			<div>
				<label for="location">Location: </label>
				<select name="location" id="location">
					<option>Where did you capture this Pokemon?</option>
					<option>Kanto</option>
					<option>Johto</option>
					<option>Hoenn</option>
					<option>Sinnoh</option>
					<option>Unova</option>
					<option>Kalos</option>
				</select>
				{{$errors->first('location')}}
			</div>

			<div>
				<label for="photo">Photo: </label>
				<input type="file" id="photo" name="photo">
				{{$errors->first('photo')}}
			</div>
			<input type="submit" value="Add To Collection" class="tiny button">
		</form>
		</div>
	</div>

@endsection