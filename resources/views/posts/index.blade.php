@extends('master')


@section('content')

@if (session('success'))

<div class="container">
	<div class="alert alert-success">
		{{ session('success') }}
	</div> 
</div>

@endif

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New post</a>			
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					
					@foreach($posts as $post)
					
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 100) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('d F Y | h:ia', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
							{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
					
							{!! Form::submit('Delete', ['class' => 'btn btn-default btn-sm']) !!}
						
							{!! Form::close() !!}</td>
						</tr>
					
					@endforeach
					
				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>
</div>

@stop