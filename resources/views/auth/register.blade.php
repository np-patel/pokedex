@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Trainer Registration</h1>
		<form action="/auth/register" method="post" novalidate>
			{{ csrf_field() }}
			<div>
				<label for="name">Trainer Name: </label>
				<input type="text" id="name" name="name" placeholder="Ash Ketchum" value="{{ old('name') }}">
				{{ $errors->first('name') }}
			</div>
			<div>
				<label for="email">E-Mail: </label>
				<input type="email" id="email" name="email" placeholder="ash@ketchum.all" value="{{ old('email') }}">
				{{ $errors->first('email') }}
			</div>
			<div>
				<label for="password">Password: </label>
				<input type="password" id="password" name="password">
				{{ $errors->first('password') }}
			</div>
			<div>
				<label for="password_confirmation">Confirm Password: </label>
				<input type="password" id="password_confirmation" name="password_confirmation">
			</div>
			<input type="submit" value="Register" class="tiny button">
		</form>
	</div>
</div>

@endsection