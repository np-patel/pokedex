@extends('master')

@section('content')

	<div class="row">
		<div class="columns">
			<h1><small>Pokemon #{{$info->id}}:</small> {{$info->name}}</h1>
		</div>
	</div>

@endsection