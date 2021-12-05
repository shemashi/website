<?php
// Connexion à la base de données
include "insert.php" ;

//Après clic sur le bouton "Envoyer" envoie de données par post
if(isset($_POST["formsend"])){
	//récupération et protection des données envoyées
	$nom = mysqli_real_escape_string($conn,$_POST["nom"]);
	$prenom = mysqli_real_escape_string($conn, $_POST["prenom"]);
	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	
	$sql = "INSERT INTO inscription (nom, prenom, email)	VALUES ('{$nom}', '{$prenom}', '{$email}')";
    
	//exécuter la requête d'insertion
	if (mysqli_query($conn, $sql)) {
    	$message= " ajouté  avec succès";
	} else {
    	$message = "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

//les autres pages peuvent envoyer un message dans L’URL. On le  récupère ici pour l'afficher dans l’élément "div.message"
if(isset($_GET["message"])){
	$message=$_GET["message"];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/inscription1.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
    <form action='inscription1.php' method="POST"> 
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>INSCRIPTION à L'INSEA</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="inscription1.php" method="post">
					<input class="text" type="text" name="nom" placeholder="Votre nom" required="">
					<br>
					<input class="text" type="text" name="prenom" placeholder="Votre prénom" required="">
					<input class="text email" type="email" name="email" placeholder=" Votre addresse Email" required="">
					<input class="text" type="password" name="password" placeholder="Votre mot de passe" required="">
					<input class="text w3lpass" type="password" name="cpassword" placeholder="Confirmez votre mot de passe" required="">
					<label for="birthday">Date de naissance:</label>
					<input type="date" id="dnaissance" name="dnaissance"> 
					<br>
					<br>
				</form>
					<div class="wthree-text">
						<div class="clear"> </div>
						<div class="row row-space">
	                        <div class="col-2">
	                            <div class="input-group"></div>
	                        </div>
	                        <div class="col-2">
	                            <div class="input-group">
	                                <div class="input-group">
	                            		<label class="label">Sexe</label>
	                            		<div class="rs-select2 js-select-simple select--no-search">	             
			                                <select name="sexe">
			                                    <option disabled="disabled" selected="selected">Sexe</option>			                        
			                                    <option>F</option>
			                                    <option>M</option>
			                                </select>
			                                <div class="select-dropdown"></div>
	                           			 </div>
	                        		</div>
                                </div>
                            </div>
                        </div>
                    </div>
 					<form action="inscription2.php">
						<input type="submit" name="formsend" id="formsend" value="Suivant">
					</form>					
					<p>Vous êtes déjà inscrit? <a href="connection.html"> Se connecter!</a></p>  

			</div>
		</div>
	</div>

		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2019-2020 Atraoui Chaimaa. All rights reserved </p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</form>
</body>
</html>