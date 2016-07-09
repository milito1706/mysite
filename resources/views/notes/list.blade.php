@extends('layout')
    @section('content')
    	<h2>Notes</h2>
    	<p>
    		<a href="{{ url('notes/create') }}">Add a note </a> 
    	</p>
	    @foreach($notes as $note)
		   	<li>
		    	{{ $note->note }}
		   	</li>
	   	@endforeach
	@endsection 

	