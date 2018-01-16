@extends('master')

@section('bootstrap')
<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		{{ Html::style('css/styles.css') }}
		<link media="all" type="text/css" rel="stylesheet" href="https://www.prkdigital.com/css/parsley.css">
@stop

@section('nav')

<nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="/">Administration</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <ul class="nav navbar-nav">
    	<li><a class="navbar-brand" href="/">Home</a></li>
	    <li @if(Request::is('posts/create'))class="active"@endif><a href="/posts/create">Create New Post</a></li>
	    <li @if(Request::is('posts'))class="active"@endif><a href="/posts">My Posts</a></li>
		  </ul>
		</li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a hidden="">Logout</a></li>
		  </ul>
		</li>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@stop

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
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

			<p class="lead">{{ $post->body }}</p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a>
				</dl>
				<dl class="dl-horizontal">
					<label>Created At:</label>
						<p>{{ date('d F Y | h:ia', strtotime($post->created_at)) }}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
						<p>{{ date( 'd F Y | h:ia', strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
					
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
						
					</div>
					<div class="col-sm-6">
					
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
					
							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
						
						{!! Form::close() !!}
						
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						{!! Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-h1-spacing btn-default btn-block']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('post-scripts')
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://www.prkdigital.com/js/parsley.min.js"></script>
@stop