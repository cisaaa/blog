@extends('layouts.app')

@section('content')

	@if(count($errors))
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
		
	@endif


	{!! Form::open() !!}

		{!! Form::label('title','Blog Title:') !!}
		{!! Form::text('title',$blogs->title, ['class' => 'form-control', 'placeholder' => 'ex. Article Title']) !!}
		<br>

		<div class="form-group">
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body',$blogs->body,['class' => 'form-control']) !!}
		</div>

		<div>
			{!! Form::label('category','Category:') !!} 

			{!! Form::select('category',array ('Tips' => 'Tips', 'Technology' => 'Technology', 'Health' => 'Health', 'Politics' => 'Politics', 'Review' => 'Review'),$blogs->category, ['class' => 'form-control']) !!}
		</div>
		
		<br>

		{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
@stop
	
