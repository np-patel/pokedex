@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Trainer Login</h1>
		<form action="/auth/login" method="post" novalidate>
			{{ csrf_field() }}
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
			<input type="submit" value="Login" class="tiny button">
		</form>
	</div>
</div>

@endsection