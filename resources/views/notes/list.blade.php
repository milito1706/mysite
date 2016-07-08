
    @extends('layout')
    @section('content')

    @foreach($notes as $note)
	   	<li>
	    	{{ $note->note }}
	   	</li>
   	@endforeach
	<form method="POST">
			{!! csrf_field() !!}
			<textarea></textarea>
			<button type="Submit">Create note </button>
	</form>

	@endsection 