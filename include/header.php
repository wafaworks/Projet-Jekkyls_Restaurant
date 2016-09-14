<!DOCTYPE html>

<html>

<head>
	<title><?php echo $pageTitle; ?> </title>
 	<!--jquery -->
 	<script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
 	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
 	<link rel="stylesheet" href="main.css"> 
</head>

<body>
<header>
<!-- La j'ai codé en considerant que, sur les petits devices (xs et sm), le menu a gauche ferait 2 sur 12 mais ça s'adapte, on peut même differencier xs et sm si besoin. Quand le menu a gauche disparait (taille medium et large, la "main zone" (là où il y aura le logo, etc) occupe toute la largeur. -->
	<div class="container-fluid" id="headmain"> <!-- ou container-fluid, a voir -->
		<div class="row">
			<div class="col-xs-2 hidden-md hidden-lg" id="navbarS">
			<div class="btn-group">
   				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  				 <span class="glyphicon glyphicon-menu-hamburger"></span></button>
   				<ul class="dropdown-menu" role="menu">
     				<li><a href="#">Notre enseigne</a></li>
      				<li><a href="#">Notre histoire</a></li>
      				<li><a href="#">Nos Restaurants</a></li>
      				<li><a href="#">Espace franchise</a></li>

    			</ul>
  			</div>
				<!-- <div class="dropdown">
 				<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu1 <span class="caret"></span>
  				</button>
  					<ul class="dropdown-menu" aria-labelledby="dLabel">
    				Menu2
  					</ul>
  					<ul class="dropdown-menu" aria-labelledby="dLabel">
    				Menu3
  					</ul>
  					<ul class="dropdown-menu" aria-labelledby="dLabel">
    				Menu4
  					</ul>
				</div> -->
			</div>
				<div class="col-xs-10 col-md-12" id="main"><!--<img src="img/logo-resto.png"/> --></div>
		</div>
		<div class="row" > 
		<!-- sur petite taille, on a toujours barre a gauche, sur grand taille on a la navbar horizontale en bas. En dehors de Medium et Large la navbar horizontale est inexistante.
			<div class="col-xs-2 hidden-md hidden-lg" id="navbarS"></div>
			<div class="col-xs-10 hidden-md hidden-lg" id="main"> </div>
		-->
			<div class="hidden-xs hidden-sm col-md-1" id="navbarL"></div>
			<div class="hidden-xs hidden-sm col-md-2" id="navbarL"><p>Enseigne</p></div>
			<div class="hidden-xs hidden-sm col-md-2" id="navbarL"><p>Histoire</p></div>
			<div class="hidden-xs hidden-sm col-md-2" id="navbarL"></div>
			<div class="hidden-xs hidden-sm col-md-2" id="navbarL"><p>Nos Restaurants</p></div>
			<div class="hidden-xs hidden-sm col-md-2" id="navbarL" id="menfran"><p>Franchise</p></div>
			<div class="hidden-xs hidden-sm col-md-1" id="navbarL"></div>

		</div>
	</div>
</header>