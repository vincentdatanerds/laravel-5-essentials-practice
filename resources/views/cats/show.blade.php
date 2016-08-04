@extends('layouts.master')

@section('header')
	<a href=" {{ url('/') }} ">Back to overview</a>
	<h2>
		{{ $cat->name }}


	</h2>
	<a href = " {{ url('cats/' . $cats->id .'/edit') }}">
		Edit

	</a>

@stop


@section('content')
	<p> Date of birth: {{ $cat->date_of_birth }}</p>

@stop
