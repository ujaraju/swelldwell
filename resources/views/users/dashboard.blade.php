@extends('layouts.dashboard')

@section('title', $user->name)

@section('helper')
{{-- filter go here --}}
@stop

@section('hero')
	{{-- hero go here --}}
	@include('users.partials.profile')
@stop


@section('content')
{{-- contents go here --}}


	<div class="row">
		{{-- {{ $user->properties }}  --}}
		{{--get all the products by this user--}} 
		@foreach( $properties as $property)
			@include('properties.partials.list')
		@endforeach

	</div>
@stop

@section('footer')
{{-- additional footer content go here eg: javascript --}}
@stop



