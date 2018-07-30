@extends('layout.app')

@section('title','About')

@section('body')
	    @empty($mimi)
        	I am PIKU
        @endempty

        @foreach($mimi as $piku)
        	{{$piku}}
        @endforeach

        @for ($i = 0; $i < 10; $i++)
    		The current value is {{ $i }}
		@endfor

		@foreach ($mimi as $user)

		    @if ($loop->first)
		        This is the first iteration.
		    @endif

		    @if ($loop->last)
		        This is the last iteration.
		    @endif

    			<p>This is user </p>
		@endforeach
@endsection