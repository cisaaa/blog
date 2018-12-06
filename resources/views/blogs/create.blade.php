@extends('layouts.app')

@section('content')


	@if(count($errors))
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
		
	@endif


	{!! Form::open(['url' => 'blogs']) !!}

		{!! Form::label('title','Blog Title:') !!}
		{!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'ex. Blog Title']) !!}
		<br>

		<div class="form-group">
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body',null,['class' => 'form-control']) !!}
		</div>

		
		<div>
			{!! Form::label('category','Category:') !!} 

			{!! Form::select('category',array ('Tips' => 'Tips', 'Technology' => 'Technology', 'Health' => 'Health', 'Politics' => 'Politics', 'Review' => 'Review'),null, ['class' => 'form-control']) !!}
		</div>
		
		<br>
		{!! Form::submit('Add new Blog', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

	@if($errors->has('title'))
		An error occured.
	@endif
@stop
	
