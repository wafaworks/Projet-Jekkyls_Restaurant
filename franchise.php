<!DOCTYPE html>

<html>

<head>
	<title>"Espace Franchise : Formulaire Jekkyls' Restaurant"</title>
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
	<link rel="stylesheet" type="text/css" href="css/franchise.css" />
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

    <div class=bloc-text>
		<h2>Pourquoi devenir franchisé ?</h2>
		<p class="paragraph">Avec 7 restaurants créés en seulement 5 ans, Jekyll est une franchise en pleine expansion. Tout en fournissant un service haut de gamme, nous avons à coeur de vous fournir des produits bio et de qualités. Ces valeurs qui plaisent et qui font notre force sont le fruit d’un processus de sélection draconien pour nos futurs franchisés. C'est pourquoi nous exigeons un minimum de savoir-faire avec ce type de produits pour toute demande de franchise.</p>

		<p class="paragraph">Et parce que nous mettons un point d’honneur sur le respect de notre concept et de notre technicité, nous nous efforçons au mieux d’accompagner nos nouveaux franchisés sur toute leur période de lancement, mais également de les préparer en amont. Échanges avec nos plus fervents cuisiniers et chefs cuisiniers, ateliers autour de nos recettes phares : lors d’un séminaire d’une semaine nous partagerons avec vous toute la passion qui nous anime mais aussi toutes nos connaissances, vous donnant toutes les clés qui feront de votre futur restaurant une perle rare.</p>

		<p class="paragraph">Enfin, l’un des points essentiels qui fait notre force et notre renommée est l’ouverture d’esprit. Loin des stéréotypes de la haute gastronomie, nous encourageons fortement l’innovation et la prise de risque. Alors même si notre spécialité principale restera toujours la ratatouille, n’hésitez surtout pas à nous faire part de toute votre créativité en nous proposant de nouvelles recettes, inspirées des saveurs de votre région d’implantation notamment. Tout ce qui pourra ajouter de l'authenticité et de la valeur unique à notre enseigne sera considéré avec grande attention.</p>

		<p class="paragraph">Car faire partie de l’aventure Jekkyls' ne revient pas à simplement monter un business parmi tant d’autres. Ce sera vraiment l’occasion pour vous de rejoindre une famille de vrais passionnés qui sait allier enthousiasme et rigueur, avec aussi beaucoup de challenge, qu’il soit personnel ou collectif.</p>
	</div>
	<div class="franchise-image">
		<img src="img/chef-picture.jpg" alt="Illustration cuisine Jekkyls' Restaurant"/>
	</div>

	<h2>Envie de faire partie de l'aventure Jekkyls ?</h2>
	<p class="paragraph" id="phrase">Remplissez ce formulaire et nous tâcherons de vous répondre dans les meilleurs délais !</p>

	<!-- Début du code formulaire -->
<?php
	if (isset($_POST["submit"])) {
		$societe = $_POST['societe'];
		$name = $_POST['nom'];
		$email = $_POST['email'];
		$telephone = $_POST['telephone'];
		$message = $_POST['message'];
		$local = $_POST['local'];
		$cuisinier = $_POST['cuisinier'];
		$implantation = $_POST['implantation'];
		$apport = $_POST['apport'];
		$human = intval($_POST['human']);
		$from = 'Potentiel Franchisé'; 
		$to = 'wafa.adj@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="De: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['nom']) {
			$errName = "Entrez votre nom s'il vous plait";
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = "Entrez un email valide s'il vous plait";
		}

		if (!$_POST['telephone']) {
			$errTelephone = "Entrez un numéro s'il vous plait";
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = "Ecrivez un message s'il vous plait";
		}

		if (!$_POST['local']) {
			$errLocal = "Répondez s'il vous plait";
		}

		if (!$_POST['cuisinier']) {
			$errCuisinier = "Répondez s'il vous plait";
		}

		if (!$_POST['implantation']) {
			$errImplantation = "Répondez s'il vous plait";
		}

		if (!$_POST['apport']) {
			$errApport = "Répondez s'il vous plait";
		}
		
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = "Le code n'est pas valide, essayez encore";
		}
// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman && !$errTelephone && !$errLocal && !$errCuisinier && !$errImplantation && !$errApport) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Merci de votre intérêt, nous vous tiendrons informé dès que possible.</div>';
			} else {
				$result='<div class="alert alert-danger">Excusez nous mais une erreur est survenue sur votre formulaire, essayez à nouveau</div>';
			}
		} 
		echo $result;
	}
?> 

 <!-- Voir si ce lien est déjà dans la homepage ou si on doit spécifiquement l'ajouter pour cette page/le formulaire  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Formulaire pour devenir franchisé</h1>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Nom - Prénom *</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nom et prénom" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email *</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="exemple@domaine.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="adress" class="col-sm-2 control-label">Adresse *</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="adress" name="adresse" placeholder="Numéro Rue - CodePostal Ville" value="<?php echo htmlspecialchars($_POST['adress']); ?>">
							<?php echo "<p class='text-danger'>$errAdress</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="telephone" class="col-sm-2 control-label">Telephone *</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="telephone" name="telephone" placeholder="numéro de portable ou fixe" value="<?php echo htmlspecialchars($_POST['telephone']); ?>">
							<?php echo "<p class='text-danger'>$errTelephone</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Vos motivations et ambitions *</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="implantation" class="col-sm-2 control-label">Dans quelle(s) ville(s) souhaiteriez-vous vous implanter? *</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="implantation"><?php echo htmlspecialchars($_POST['implantation']);?></textarea>
							<?php echo "<p class='text-danger'>$errImplantation</p>";?>
						</div>
					</div>					
					<div class="form-group">
						<label for="local" class="col-sm-2 control-label">Avez-vous un local? *</label>
						<div class="col-sm-10">
							<select class="form-control" name="local" value="<?php echo htmlspecialchars($_POST['local']); ?>">
				                <option value="oui">Oui</option>
				                <option value="non">Non</option>
				                <option value="en-cours">En cours</option>
				            </select>
							<?php echo "<p class='text-danger'>$errLocal</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="cuisinier" class="col-sm-2 control-label">Expérience de votre chef cuisinier *</label>
						<div class="col-sm-10">
							<select class="form-control" name="cuisinier" value="<?php echo htmlspecialchars($_POST['cuisinier']); ?>">
				                <option value="cinq">5 ans</option>
				                <option value="sept">7 ans</option>
				                <option value="dix">10 ans ou +</option>
				            </select>
							<?php echo "<p class='text-danger'>$errCuisinier</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="apport" class="col-sm-2 control-label">Quel serait votre apport initial ? *</label>
						<div class="col-sm-10">
							<select class="form-control" name="apport" value="<?php echo htmlspecialchars($_POST['apport']); ?>">
				                <option value="quinze">de 15 000 à 30 000€</option>
				                <option value="trente">de 30 000 à 50 000€</option>
				                <option value="cinquante">+ de 50 000€</option>
				            </select>
							<?php echo "<p class='text-danger'>$errApport</p>";?>
						</div>
					</div>					
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Votre réponse">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


	<!-- Fin code formulaire -->

<?php
	include 'include/footer.php';
?>