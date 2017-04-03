@extends('layouts.results')

@section('site-name')
	NinjaPI
@endsection

@section('body')
	@foreach($tweets as $tweet)
		{{ $tweet->id }}<br>
		{{ $tweet->text }}<br>
		{{ $tweet->created_at }}<br>
	@endforeach
@endsection