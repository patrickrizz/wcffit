@extends('master')

@section('head')
<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/magnific-popup.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	<link href='../css/cal/fullcalendar.min.css' rel='stylesheet' />
	<link href='../css/cal/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='../js/cal/moment.min.js'></script>
	<script src='../js/cal/jquery.min.js'></script>
	<script src='../js/cal/fullcalendar.min.js'></script>
	<script src='../js/cal/gcal.min.js'></script>
	<script src="../js/cal/app.js"></script>

	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-101779851-1', 'auto');
  		ga('send', 'pageview');

	</script>
	@stop

@section('nav')
<header class="main__header">
	<div class="container">
		<nav class="navbar navbar-default"> 
			<!-- Brand and toggle get grouped for better mobile display --> 
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-header">
				<h1 class="navbar-brand"><a href="/"><img src="../images/logo2.jpg" alt=""/></a></h1>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>
			<div class="navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav nav-justified">
					<li @if ($title == "prkdigital | Edinboro, PA") class="active" @endif>
			    		<a href="/">Home</a>
				    </li>					          
					<li class="dropdown">
						<div class="dropper"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
							<ul class="dropdown-menu">
								<li @if ($title == "about") class="active" @endif>
									<a href="/about">About Us</a>
								</li>
								<li @if ($title == "rates") class="active" @endif>
									<a href="/rates">Rates</a>
								</li>                  
							</ul>
						</div>
					</li>
					<li class="dropdown">
						<div class="dropper"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Classes</a>
							<ul class="dropdown-menu">
								<li @if ($title == "classes") class="active" @endif>
									<a href="/classes">Class Calendar</a>
								</li>
								<li @if ($title == "classdescription") class="active" @endif>
									<a href="/classdescription">Class Descriptions</a>
								</li>                  
							</ul>
						</div>
					</li>
					<li @if ($title == "gallery") class="active" @endif>
						<a href="/gallery">Gallery</a>
					</li>
					<li class="dropdown">
						<div class="dropper"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
							<ul class="dropdown-menu">
								<li @if ($title == "trainers") class="active" @endif>
									<a href="/trainers">Trainers</a>
								</li>
								<li @if ($title == "rules") class="active" @endif>
									<a href="/rules">Gym Rules</a>
								</li>
								<li @if ($title == "childrules") class="active" @endif>
									<a href="/childrules">Child Care Rules</a>
								</li>
								<li @if ($title == "staffHours") class="active" @endif>
									<a href="/staffhours">Staffed Hours</a>
								</li>
								<li @if ($title == "contact") class="active" @endif>
									<a href="/contact">Contact Us</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>  
@stop

@section('content')

<div class="background">
	<section id="blog" class="recent-posts">
		<div class="container">
		<div class="row with__sep"></div>	
		<div class="row no_padding">
			<div class="col-md-9">
				<div class="container recent-posts">
					<h5 class="page_title text-center"><span>{{ $post->title }}</h5>
					<div class="row no-margin no_padding">
						<p>{{ $post->body }}</p>						
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</div>
@stop