@extends('layouts.app')

@section('content')

<button type="button" class="btn btn-success" onclick="window.location='{{ url("blogs/create") }}'">Create New</button>
<hr>

	@foreach($blogs as $blog)

		<div class="panel panel-default">
			<div class="panel-body" style="padding-top: 0px">
				<article>
				<h3><a href="{{ url('blogs/show/'.$blog->id) }}"><b>{{ $blog->title }}</b></a></h3>
				<p>{{ $blog->body }}</p>
				<a href="{{ url('blogs/category/' .$blog->category) }}"><b>{{ $blog->category }}</b></a>
				<br>
				<small class="text-muted"><i>Posted: {{ $blog->updated_at }}</i> </small>
			</article>
			</div>
			
		</div>
	@endforeach
	
	



@stop