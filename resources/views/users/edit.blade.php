@extends('layout.app')

@section ('title','Details Songs')


@section ('body')
		{{$song->title}} - {{$song->artist}}
@endsection