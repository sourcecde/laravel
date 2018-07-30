@extends('layout.app')

@section ('title','Songs')


@section ('body')
	@foreach($songs as $song)
		{{$song->title}} - {{$song->artist}}
	@endforeach
@endsection