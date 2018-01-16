<!-- master -->
@extends('master')

<!-- content -->
@section('content')

<!-- content -->

{!! $contents[0]['content'] !!}



<!-- Blog -->
<!-- 2 columns start-->
<section class="main__middle__container">
 <div class="seperate-background">
  <div class="container recent-posts">    
    <h2 class="page_title text-center revealOnScroll" data-animation="fadeInUp" data-timeout="0"><span>Whats New at West County Fitness</span><br />
      <span class="sep"></span><br />
      <small></small></h2>
      
      
      @foreach($posts as $post)
		 
			  <div @if ($loop->iteration % 2 == 0) class="one_half_pad column-last revealOnScroll" data-animation="fadeInUp" data-timeout="250" @else class="one_half_pad revealOnScroll" data-animation="fadeInUp" data-timeout="250"  @endif>
				<h4>{{ $post->title }}</h4>
				<p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? "..." : "" }}</p>
			  </div>
     	  
      @endforeach           
      
      
	</div>
	</div>
</section>

<!-- End Of Blog -->


<!-- end of content section -->

@stop

