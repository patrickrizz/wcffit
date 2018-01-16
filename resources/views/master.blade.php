<!DOCTYPE html>
<html lang="en">
<head>
	
<!-------------------------- For pages only ------------------------------------------>
	@if(Request::is('/', 'about', 'classes', 'staffhours', 'contact', 'gallery', 'rates', 'trainers', 'rules', 'childrules', 'classdescription', 'readmore', 'blog', 'childhours'))
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="West County Fitness is a Family Driven Fitness Facility located in Girard, PA with a child watch feature and and many group classes.">
	<meta name="keywords" content="Fitness,Fit,Health,Training,Personal Trainers,wcffit,West County,Girard Gyms,Gym,Erie Gym,Erie Fitness">
	<meta name="author" content="West County Fitness">
	
	<link href="../images/faviconlogo.ico" rel="shortcut icon">

<!---------------------------- Style Sheets ------------------------------------------------------------->


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="../css/animate.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/magnific-popup.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	<script src="../js/googleAnalytics.js"></script>
	
<!-- Moment.js must be loaded before fullcalendar -->
	<script src='../js/cal/moment.min.js'></script>
	<script src="../js/jquery.min.js"></script>

<!--------------- For Calander Only --------------------------->
@if(Request::is('classes', 'staffhours', 'childhours'))
	<link href='../css/cal/fullcalendar.min.css' rel='stylesheet' />
	<link href='../css/cal/fullcalendar.print.min.css' rel='stylesheet' media='print' />


	<script src='../js/cal/fullcalendar.min.js'></script>
	<script src='../js/cal/gcal.min.js'></script>
	<script src="../js/cal/app.js"></script>
	
@endif
<!--------------- End of Calander Scripts and Links  ------------------>

	 
@endif
<!--------------- End of Head for Pages ---------------------------------->	
	
<!--------------- For Posts only ---------------------------------->
	@if(Request::is('posts', 'posts/create', 'content', 'content/create', 'login', 'register'))
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		{{ Html::style('css/styles.css') }}
		<link media="all" type="text/css" rel="stylesheet" href="https://www.prkdigital.com/css/parsley.css">
	@endif	
	
	@yield('bootstrap')	
<!-----------------End of Posts Head ---------------------------->
</head>
<body>
<script src="../js/effects/fadeOnLoad.js"></script>
<!-- For pages only -->
@if(Request::is('/', 'about', 'classes', 'staffhours', 'contact', 'gallery', 'rates', 'trainers', 'rules', 'childrules', 'classdescription', 'readmore', 'blog', 'childhours'))
@if(Auth::check())
<header class="main__header">
	<div class="container">
		<nav class="navbar navbar-default"> 
			<!-- Brand and toggle get grouped for better mobile display --> 
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-header"> 

				<h1 class="navbar-brand revealOnScroll" data-animation="slideInDown" data-timeout="250">
					<a href="/"><img src="../images/logo2.jpg" alt=""/></a></h1>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
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
									<a href="/childrules">Child Watch Rules</a>
								</li>
								<li @if ($title == "childhours") class="active" @endif>
									<a href="/childhours">Child Watch Hours</a>
								</li>
								<li @if ($title == "staffHours") class="active" @endif>
									<a href="/staffhours">Staffed Hours</a>
								</li>
								<li @if(Request::is('blog')) class="active" @endif>
									<a href="/blog">View All Postings</a>
								</li>
								<li @if ($title == "contact") class="active" @endif>
									<a href="/contact">Contact Us</a>
								</li>
							</ul>
						</div>
					</li>
					
					<li class="dropdown">
						<div class="dropper"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
							<ul class="dropdown-menu">
								<li @if(Request::is('posts'))class="active"@endif><a href="/posts">My Posts</a></li>
								<li @if(Request::is('posts/create'))class="active"@endif><a href="/posts/create">Create New Post</a></li>	
								<li><a href="/logout">Logout</a></li>							
							</ul>
						</div>
					</li>
					
				</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>  

@else

<header class="main__header">
	<div class="container">
		<nav class="navbar navbar-default"> 
			<!-- Brand and toggle get grouped for better mobile display --> 
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-header">
				<h1 class="navbar-brand revealOnScroll" data-animation="fadeInDown" data-timeout="250">
					<a href="/"><img src="../images/logo2.jpg" alt=""/></a></h1>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
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
									<a href="/childrules">Child Watch Rules</a>
								</li>
								<li @if ($title == "childhours") class="active" @endif>
									<a href="/childhours">Child Watch Hours</a>
								</li>
								<li @if ($title == "staffHours") class="active" @endif>
									<a href="/staffhours">Staffed Hours</a>
								</li>
								<li @if(Request::is('blog')) class="active" @endif>
									<a href="/blog">View All Postings</a>
								</li>
								<li @if ($title == "contact") class="active" @endif>
									<a href="/contact">Contact Us</a>
								</li>
							</ul>
						</div>
					</li>
					
					<li>
						<a href="/login">Login</a>
					</li>
					
				</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>

@endif
 @endif
  
  @yield('head')
  @yield('nav')
  @if(Request::is('posts', 'posts/create', 'login', 'register'))
 <!-- for posts only -->
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
	    <li @if(Request::is('register'))class="active"@endif><a href="/register">Register New User</a></li>
		  </ul>
		</li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="/logout">Logout</a></li>
		  </ul>
		</li>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 @endif

  <!-- content -->
  @yield('content')

<!-- for pages only -->
@if(Request::is('/', 'about', 'classes', 'staffhours', 'contact', 'gallery', 'rates', 'trainers', 'rules', 'childrules', 'classdescription', 'readmore', 'blog', 'childhours'))
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3><small>Staffed Hours</small></h3>
	<br />
    <p><b>Monday - Thursday:</b></p>
	<p>8:00 - 11:00pm</p>
	<p>4:00 - 8:00 pm</p>
	<br />
	<p><b>Friday:</b></p>
	<p>8:00 - 11:00am</p>
	<p>4:00 - 6:30pm</p>
	<br />
	<p><b>Saturday:</b></p>
	<p>8:00 - 11:00am</p>
      </div>
      <div class="col-md-3">
	<h3><small>Daycare Hours</small></h3>
	<br />
    <p><b>Monday - Thursday:</b></p>
	<p>8:00 - 11:00am</p>
	<p>4:00 - 7:00pm</p>
	<br />
	<p><b>Friday:</b></p>
	<p>8:00 - 11:00am</p>
    <br />
	<p><b>Saturday:</b></p>
	<p>8:00 - 11:00am</p>
      </div>
			 <!-- <div class="col-md-4">
				<h3><small>Mailing list</small></h3>
				<p>Subscribe to our mailing list for offers, news updates and more!</p>
				<br />
				<form action="#" method="post" class="form-inline">
				  <div class="form-group">
					<label class="sr-only" for="exampleInputEmail2">your email:</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="your email:">
				  </div>
				  <button type="submit" class="btn btn-default">subscribe</button>
				</form>
			  </div> -->
      <div class="col-md-3">
        <h3><small>Contact</small></h3>
        <p>66 Main St. West<br />
          Giarard, PA 16417<br />
          USA<br />
          <br />
          Phone: (814) 622-0007<br />
          Email: westcountyfitnessllc@gmail.com<br />
          <br />
        </p>
        <div class="social__icons"><a href="https://www.facebook.com/westcountyfitness/" class="socialicon socialicon-facebook"></a></div>
	</div>	
	<div class="col-md-3">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.9788721698696!2d-80.32029668415521!3d42.00072897921265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883270346740c461%3A0x94facd8b92c7e991!2s66+Main+St+W%2C+Girard%2C+PA+16417!5e0!3m2!1sen!2sus!4v1487183921700" width="100%" height="250" style="border:0" allowfullscreen></iframe>

	</div>

    </div>
    <hr>
    <p class="text-center">&copy; Copyright WestCountyFitness. All Rights Reserved.</p>
  </div>
</footer>
@endif

<!-- For pages only -->
@if(Request::is('/', 'about', 'contact', 'gallery', 'rates', 'classdescriptions', 'trainers', 'rules', 'childrules'))
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- <script src="../js/bootstrap.min.js"></script> -->
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="../js/effects/animate.js"></script>

<!------------------------ Gallery Scripts Only ------------------------->
@if(Request::is('gallery'))
<script src="../js/jquery.mixitup.min.js"></script> 
<script src="../js/jquery.magnific-popup.js"></script> 
<script>
    $(document).ready(function () {
        // Start work gallery
        $('#Grid').mixitup();
        });
        $('.gallery').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                  enabled:true
                }
            });
        });
</script>
@endif	
<!---------------------------End of Gallery Scripts ---------------------->
	@endif

<!-- For Posts only -->
@if(Request::is('posts', 'posts/create'))
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://www.prkdigital.com/js/parsley.min.js"></script>
@endif
@yield('post-scripts')
</body>
</html>
