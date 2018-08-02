@extends('layout.app')

@section ('title','Users')


@section ('body')
		{{$users->name}}-{{$users->number}}
		@foreach($mobiles as $mobile)
			{{$mobile->number}}
		@endforeach
@endsection