@extends('master')


@section('content')

<div class="background">
<section id="blog" class="recent-posts">
	<div class="container">		
		<h2 class="page_title text-center"><span>Viewing All Posts</span><br />
		<span class="sep"></span></h2>
		<div class="row with__sep"></div>
		
		<div class="row">
			<div class="col-md-12">
			@foreach($posts as $post)
				<!-- <article><img src="images/Buisness Card.jpg" alt="pic1" class="pull-left img-responsive">
					<div class="text">
						<h3>{{ $post->title }}</p>
						<p><small>{{ substr($post->body, 0, 650) }}{{ strlen($post->body) > 300 ? "..." : "" }}</small></p>
						<h4><a href="/readmore">Continue Reading ...</a></h4>
					</div>			
					<div class="clearfix"></div>
				</article>
				<hr>
				<br />
				<br /> -->
				<div class="container recent-posts seperate-background-margin">
					<h4 class="page_title text-center"><span>{{ $post->title }}</h4>
					<div class="row no-margin no_padding">
						<p>{{ substr($post->body, 0, 650) }}{{ strlen($post->body) > 650 ? "..." : "" }}</p>						
				</div>
				<h4 class="text-center"><a href="{{ url('blog/'.$post->slug) }}">Continue Reading ...</a></h4>
			
				        
				</div>
			@endforeach			
		</div>
		
			<div class="row">
			<div class="col-md-12 text-center">
				{!! $posts->links(); !!}
			</div>
			</div>
		
	</div>
	</div>
		
</section>
</div>

@stop