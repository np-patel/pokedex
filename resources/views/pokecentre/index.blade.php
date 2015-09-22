@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Welcome {{ Auth::user()->name }}</h1>
	</div>
</div>

@endsection