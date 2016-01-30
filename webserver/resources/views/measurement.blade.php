<!DOCTYPE html>
<html lang="en">
<head>
	<title>IESS - WebApp</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- loading jQuery and Bootstrap libaries from internet scources -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
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
	.logo {
		color: #f4511e;
		font-size: 200px;
	}
	@media screen and (max-width: 768px) {
		.col-sm-4 {
			text-align: center;
			margin: 25px 0;
		}
	}
	.thumbnail {
		padding: 0 0 15px 0;
		border: none;
		border-radius: 0;
	}

	.thumbnail img {
		width: 40%;
		height: 40%;
		margin-bottom: 10px;
	}
	.carousel-control.right, .carousel-control.left {
		background-image: none;
		color: #f4511e;
	}

	.carousel-indicators li {
		border-color: #f4511e;
	}

	.carousel-indicators li.active {
		background-color: #f4511e;
	}
	</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="container">
		<!-- Navigation bar -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">
				  Logo
			  </a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#measurement">MEASUREMENT</a></li>
				<li><a href="#contact">CONTACT</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<!-- Headline -->
		<div class="jumbotron text-center">
			<h1>IESS - Web Monitor</h1>
			<p>Indoor Environment Supervision System</p>
			<!-- optional: subscribe field -->
			<form class="form-inline">
				<input type="email" class="form-control" size="50" placeholder="Email Address">
				<button type="button" class="btn btn-danger">Subscribe</button>
			</form>
		</div>
		<!-- About IESS -->
		<div id="about" class="container-fluid bg-grey">
			<div class="row">
				<div class="col-sm-8">
					<h2>About IESS</h2>
					<p>The IESS is being developed by Students of the Hochschule Osnabrueck and Metropolia Helsinki,
					who take part in an International Sensor Development (ISD) project. The goal of this project...</p>
					<button class="btn btn-default btn-lg">Get in Touch</button>
				</div>
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-globe logo"></span>
				</div>
			</div>
		</div>
		<!-- Logos
		<div class="container-fluid text-center bg-grey">
			<h2>ISD</h2>
			<h4>Member of the project</h4>
			<div class="row text-center">
				<div class="col-sm-6">
					<div class="thumbnail">
						<img src="images/HSOS-Logo.png" alt="HS-Osnabrueck-Logo">
						<p><strong>Hochschule Osnabrueck</strong></p>
						<p>University of Applied Sciences</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="thumbnail">
						<img src="images/Metropolia-Logo.png" alt="Metropolia-Logo">
						<p><strong>Metropolia Helsinki</strong></p>
						<p>University of Applied Sciences</p>
					</div>
				</div>
			</div>
		</div>  -->
		<!-- Measurement -->
		<div id="measurement" class="container-fluid bg-grey">
			<h2>Measurement</h2>
			<br>
			<div class="row text-center">
				<div class="col-sm-4">
					<div class="ct-chart ct-perfect-fourth" id="chart1"></div>
				</div>
				<div class="col-sm-4">
					<div class="ct-chart ct-perfect-fourth" id="chart2"></div>
				</div>
				<div class="col-sm-4">
					<div class="ct-chart ct-perfect-fourth" id="chart3"></div>
				</div>
			</div>	
		</div>
		<script>
			// Initialize a Line chart in the container with the ID chartX
			var data1 = {
					labels: [1, 2, 3, 4, 5, 6],
					series: [[9, 6, 2, 5, 3, 5]]
				};
			new Chartist.Line('#chart1', data1);
			new Chartist.Line('#chart2', data1);
			new Chartist.Line('#chart3', data1);
		</script>

		<div id="contact" class="container-fluid bg-grey">
			<h2>Contact</h2>
			<br>
			<div class="row">
				<div class="col-sm-5">
					<p><span class="glyphicon glyphicon-map-marker"></span> Osnabrueck, Germany</p>
					<p><span class="glyphicon glyphicon-phone"></span> +49 XXX</p>
					<p><span class="glyphicon glyphicon-envelope"></span> XXX@hs-osnabrueck.de</p>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
						</div>
						<div class="col-sm-6 form-group">
							<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
						</div>
					</div>
					<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
					<div class="row">
						<div class="col-sm-12 form-group">
							<button class="btn btn-default pull-right" type="submit">Send</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>