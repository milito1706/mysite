@extends('layout')
@section('content')
	<h1>Create a Note</h1>
	<form method="POST" action="{{ url('notes') }}">
			{!! csrf_field() !!}
			<textarea name="note" class="form-control"></textarea>
			<button type="Submit" class="btn btn-primary">Create note</button>
	</form>

@endsection
