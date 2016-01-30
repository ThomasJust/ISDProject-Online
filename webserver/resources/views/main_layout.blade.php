<!DOCTYPE html>
<html lang="en">
<head>
	<title>IESS - WebApp</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- loading chartist libary from internet scources -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

	<!-- custom style -->
	<style>
	
	.navbar {
		margin-bottom: 0;
		background-color: #f4511e;
		z-index: 9999;
		border: 0;
		font-size: 12px !important;
		line-height: 1.42857143 !important;
		letter-spacing: 4px;
		border-radius: 0;
	}

	.navbar li a, .navbar .navbar-brand {
		color: #fff !important;
	}

	.navbar-nav li a:hover, .navbar-nav li.active a {
		color: #f4511e !important;
		background-color: #fff !important;
	}

	.navbar-default .navbar-toggle {
		border-color: transparent;
		color: #fff !important;
	}
	
	.jumbotron {
		background-color: #0066FF; /* Blue */
		color: #ffffff;
		padding: 100px 25px;
	}
	
	.bg-grey {
		background-color: #f6f6f6;
		padding: 60px 50px;
	}

	</style>
</head>
<body id="main_layout" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container">
	<div class="navbar navbar-inverse nav">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/">Awesome Book Store</a>
				<div class="nav-collapse collapse">
				  <ul class="nav">
					  <li class="divider-vertical"></li>
					  <li><a href="/"><i class="icon-home icon-white"></i> Book List</a></li>
				  </ul>
				  <div class="pull-right">
					<ul class="nav pull-right">
					@if(!Auth::check())
					<ul class="nav pull-right">
					  <li class="divider-vertical"></li>
					  <li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
						  <p>Please Login</a>
							<form action="/user/login" method="post" accept-charset="UTF-8">
							  <input id="email" style="margin-bottom: 15px;" type="text" name="email" size="30" placeholder="email" />
							  <input id="password" style="margin-bottom: 15px;" type="password" name="password" size="30" />
							  <input class="btn btn-info" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
							</form>
						  </div>
						</li>
					  </ul>
					@else
					<li><a href="/cart"><i class="icon-shopping-cart icon-white"></i> Your Cart</a></li>
					  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, {{Auth::user()->name}} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/user/orders"><i class="icon-envelope"></i> My Orders</a></li>
								<li class="divider"></li>
								<li><a href="/user/logout"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
					@endif
					</ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<!-- Headline -->
	<div class="jumbotron text-center">
		<h1>IESS - WebApp</h1>
		<p>Indoor Environment Supervision System</p>
	</div>
</div>

@yield('content')

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(function() {
    $('.dropdown-toggle').dropdown();

    $('.dropdown input, .dropdown label').click(function(e) {
      e.stopPropagation();
    });
  });
  
  @if(isset($error))
    alert("{{$error}}");
  @endif

  @if(Session::has('error'))
    alert("{{Session::get('error')}}");
  @endif

  @if(Session::has('message'))
    alert("{{Session::get('message')}}");
  @endif

  </script>
</body>
</html>

