@extends('layouts.master')

@section('header')
	<h2>About this site</h2>

@stop


@section('content')
	<p>There are over {{ $total_number_of_cats }} cat on this site!</p>

@stop