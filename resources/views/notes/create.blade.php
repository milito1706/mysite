@extends('layout')
@section('content')
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2>Create a Note</h2>
			@include('partials/errors')
			<form method="POST" action="{{ url('notes') }}">
				{!! csrf_field() !!}
				<div class="form-group">
					<textarea name="note" class="form-control" placeholder="Write your note here...">{{ old('note') }}</textarea>
				</div>
				<button type="Submit" class="btn btn-primary">Create note</button>
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>


@endsection

