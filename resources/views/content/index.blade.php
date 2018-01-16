@extends('master')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('content.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New post</a>			
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
					
					@foreach($content as $stuff)
					
						<tr>
							<th>{{ $stuff->id }}</th>
							<td>{{ $stuff->title }}</td>
							<td>{{ substr($stuff->body, 0, 100) }}{{ strlen($stuff->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('d F Y | h:ia', strtotime($stuff->created_at)) }}</td>
							<td><a href="{{ route('content.show', $stuff->id) }}" class="btn btn-default btn-sm">View</a><a href="{{ route('content.edit', $stuff->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>
					
					@endforeach
					
				</tbody>
			</table>
			<div class="text-center">
				{!! $content->links(); !!}
			</div>
		</div>
	</div>
</div>

@stop