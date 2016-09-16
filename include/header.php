<!DOCTYPE html>

<html>

<head>
	<?php $restoName = "Jekkyls' Restaurant" ?>
	<title><?php echo $pageTitle; ?> </title>
 	<!--jquery -->
 	<script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
 	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
	<!--css -->
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/histoire.css" />
	<!-- js -->
	<script src="js/main.js"></script> 
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

</head>

<body>
<header>
	<div class="container-fluid" id="headmain">
		<div class="row">
		<!-- Navbar for small screen -->
			<div class="col-xs-2 hidden-md hidden-lg" id="navbarS">
				<div class="btn-group">
   					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  				 		<span class="glyphicon glyphicon-menu-hamburger"></span>
  				 	</button>
   					<ul class="dropdown-menu" role="menu">
     					<li><a href="enseigne.php">Enseigne</a></li>
      					<li><a href="histoire.php">Histoire</a></li>
      					<li><a href="restos.php">Restaurants</a></li>
      					<li><a href="franchise.php">Franchise</a></li>
	    			</ul>
  				</div>
			</div>
				<a href="index.php">
					<div class="col-xs-10 col-md-12" id="main" title="Aller à page d'accueil">
						<div id="topanchor">
						</div>
					</div>
				</a>
		</div>
		<div class="row" > 
		<!-- Navbar for big screen -->
			<div class="hidden-xs hidden-sm col-md-1" class="navbarL"></div>
			<div class="hidden-xs hidden-sm col-md-2" class="navbarL"><a href="enseigne.php"><p>Enseigne</p></a></div>
			<div class="hidden-xs hidden-sm col-md-2" class="navbarL"><a href="histoire.php"><p>Histoire</p></a></div>
			<div class="hidden-xs hidden-sm col-md-2" class="navbarL"></div>
			<div class="hidden-xs hidden-sm col-md-2" class="navbarL"><a href="restos.php"><p>Restaurants</p></a></div>
			<div class="hidden-xs hidden-sm col-md-2" class="navbarL"><a href="franchise.php"><p id="menfran">Franchise</p></a></div>
			<div class="hidden-xs hidden-sm col-md-1" class="navbarL"></div>

		</div>
	</div>
</header>