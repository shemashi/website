<?php
// Connexion à la base de données
include "insert.php" ;

//Après clic sur le bouton "Envoyer" envoie de données par post
if(isset($_POST["formsend"])){
	//récupération et protection des données envoyées
	$CIN = mysqli_real_escape_string($conn,$_POST["CIN"]);
	$photo = mysqli_real_escape_string($conn, $_POST["photo"]);
	$bac = mysqli_real_escape_string($conn, $_POST["bac"]);
	$attest = mysqli_real_escape_string($conn, $_POST["attest"]);
	
	$sql = "INSERT INTO inscription (CIN,photo,bac,attest)	VALUES ('{$CIN}', '{$photo}','{$bac}','{$attest}')";
    
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
<link href="css/inscription3.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Inscription à l'INSEA</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="insert.php" method="post">
					<p>Veillez fournir les documents suivants.</p>
					<br>
					<br>
				  <br>
				<br>
				  	<label for="file-upload" class="custom-file-upload">
					    <i class="fa fa-cloud-upload"></i> Votre Photo personelle
					</label>
					<input id="file-upload" name="photo" type="file"/>
					<li id='field_1_23' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
					<br>
				  	<br>
				  	<br>
					<br>
				  	<label for="file-upload" class="custom-file-upload">
					    <i class="fa fa-cloud-upload"></i> Carte d&#039;identité
					</label>
					<input id="file-upload" name="CIN" type="file"/>
					<li id='field_1_23' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
					<br>
				  	<br>
				  	<br>
					<br>
				  	<label for="file-upload" class="custom-file-upload">
					    <i class="fa fa-cloud-upload"></i> Copie du BAC
					</label>
					<input id="file-upload" name="bac" type="file"/>
					<li id='field_1_23' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
					<br>
				  	<br>
				  	<br>
					<br>
				  	<label for="file-upload" class="custom-file-upload">
					    <i class="fa fa-cloud-upload"></i>Attestation de réussite
					</label>
					<input id="file-upload" name="attest" type="file"/>
					<li id='field_1_23' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
					<br>
					<br>
					<br>
					<br>

					<br>
					<div class="wthree-text">
					<div class="clear"> </div>
					</div>
					<input type="submit" formaction="inscription4.php" value="Suivant">	
				</form>	
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
</body>
</html>