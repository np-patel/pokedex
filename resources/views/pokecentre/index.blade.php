@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Welcome {{ Auth::user()->name }}</h1>

		<h2>Trainer Stats</h2>
		<ul>
			<li>Your trainer ID is: {{ Auth::user()->id }}</li>
			<li>Your E-Mail is: {{ Auth::user()->email }}</li>
			<li>You have Caught: {{ $totalTrainerCaptures }} Pokemon</li>
		</ul>

		<h2>Global Stats</h2>
		<ul>
			<li>Total Registered Trainers: {{ $totalTrainers }}</li>
			<li>Total Captures: {{$totalGlobalCaptures}}</li>
		</ul>
		<a href="/pokecentre/capture"class="tiny button"> add your capture</a>

	</div>
</div>

@endsection