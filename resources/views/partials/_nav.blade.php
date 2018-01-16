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
	  <a class="navbar-brand" href="/">Laravel Blog</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <ul class="nav navbar-nav">
		<li @if(Request::is('/'))class="active"@endif><a href="/">Home<span class="sr-only">(current)</span></a></li>
		<li @if(Request::is('about'))class="active"@endif><a href="/about">About</a></li>
		<li @if(Request::is('contact'))class="active"@endif><a href="/contact">Contact</a></li>
	    <li @if(Request::is('posts/create'))class="active"@endif><a href="/posts/create">Create New Post</a></li>
		  </ul>
		</li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li @if(Request::is('posts'))class="active"@endif><a href="/posts">My Posts</a></li>
			<li @if(Request::is('a'))class="active"@endif><a href="#">Another action</a></li>
			<li @if(Request::is('a'))class="active"@endif><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li @if(Request::is('a'))class="active"@endif><a href="#">Separated link</a></li>
		  </ul>
		</li>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>