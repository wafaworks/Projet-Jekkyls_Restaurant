<?php
	$pageTitle = "Espace Franchise : Formulaire Jekkyls' Restaurant";
	include 'include/header.php';
?>
<!-- CSS à intégrer dans page externe / voir pour le lien stylesheet dans input php  -->
	<style>
		body {
			text-align: center;
			line-height: 1.8;
			font-family: 'Raleway', sans-serif;
		}

		p {
			margin: 20px 20px 10px;
			text-align: center;
			padding-bottom: 5%;
		}

		h2 {
			color: #af191a;
		}

		#resto {
			text
		}

		img {
			height: 50%;
			width: 50%;	
			margin-bottom: 5%;	
		}

		input#submit.btn.btn-primary {
			margin-top: 0px;
			height: 40px;
			width: 90px;
		}
		
		div.col-sm-offset-2 {
			margin-left: auto;
		}

		label.col-sm-2.control-label {
			float: none;
			width: auto;
		}

		div.col-sm-10 {
			width: 100%;
			float: none;
			clear: both;
		}

		div.bloc-text {
			width: 70%;
			margin: 0 auto;
			margin-top: 10vh;
		}
	</style> 
<!-- Fin CSS -->

    <div class=bloc-text>
		<h2>Pourquoi devenir franchisé ?</h2>
		<p>Avec 7 restaurants créés en seulement 5 ans, Jekyll est une franchise en pleine expansion. Tout en fournissant un service haut de gamme, nous avons à coeur de vous fournir des produits bio et de qualités. Ces valeurs qui plaisent et qui font notre force sont le fruit d’un processus de sélection draconien pour nos futurs franchisés. C'est pourquoi nous exigeons un minimum de savoir-faire avec ce type de produits pour toute demande de franchise.</p>

		<p>Et parce que nous mettons un point d’honneur sur le respect de notre concept et de notre technicité, nous nous efforçons au mieux d’accompagner nos nouveaux franchisés sur toute leur période de lancement, mais également de les préparer en amont. Échanges avec nos plus fervents cuisiniers et chefs cuisiniers, ateliers autour de nos recettes phares : lors d’un séminaire d’une semaine nous partagerons avec vous toute la passion qui nous anime mais aussi toutes nos connaissances, vous donnant toutes les clés qui feront de votre futur restaurant une perle rare.</p>

		<p>Enfin, l’un des points essentiels qui fait notre force et notre renommée est l’ouverture d’esprit. Loin des stéréotypes de la haute gastronomie, nous encourageons fortement l’innovation et la prise de risque. Alors même si notre spécialité principale restera toujours la ratatouille, n’hésitez surtout pas à nous faire part de toute votre créativité en nous proposant de nouvelles recettes, inspirées des saveurs de votre région d’implantation notamment. Tout ce qui pourra ajouter de l'authenticité et de la valeur unique à notre enseigne sera considéré avec grande attention.</p>

		<p>Car faire partie de l’aventure Jekkyls' ne revient pas à simplement monter un business parmi tant d’autres. Ce sera vraiment l’occasion pour vous de rejoindre une famille de vrais passionnés qui sait allier enthousiasme et rigueur, avec aussi beaucoup de challenge, qu’il soit personnel ou collectif.</p>
	</div>
	<div class="franchise-image">
		<img src="img/chef-picture.jpg" alt="Illustration cuisine Jekkyls' Restaurant"/>
	</div>

	<h2>Envie de faire partie de l'aventure <?php $restoName ?> ?</h2> <!-- voir pour le nom du resto vs référencement.. je pense qu'il est préférable de le citer sur chaque page + mettre un <strong> autour pour encore plus le référencer -->
	<p>Remplissez ce formulaire et nous tâcherons de vous répondre dans les meilleurs délais !</p>

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
  <body>
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