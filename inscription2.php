<?php
// Connexion à la base de données
include "insert.php" ;

//Après clic sur le bouton "Envoyer" envoie de données par post
if(isset($_POST["formsend"])){
	//récupération et protection des données envoyées
	$cycle = mysqli_real_escape_string($conn,$_POST["cycle"]);
	$filiere = mysqli_real_escape_string($conn, $_POST["filiere"]);
	
	$sql = "INSERT INTO inscription (cycle,filiere)	VALUES ('{$cycle}', '{$filiere}',)";
    
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
<link href="css/inscription2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Inscription à l'INSEA</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="insert.php" method="post">
						<label class='gfield_label' for='input_1_34' > Choisissez le Cycle
							<span class='gfield_required'>*</span>
						</label>
						<br>
						<br>
						<div class='ginput_container ginput_container_select'>
							<select name='cycle' id='input_1_34'  class='medium-gfield_select' tabindex='1'  aria-required="true" aria-invalid="false">
								<option value='Cycle ingénieur' >Cycle ingénieur</option>
								<option value='Cycle Master' >Cycle Master</option>
								<option value='Cycle Doctorat' >Cycle Doctorat</option>
						    </select>
			            </div>
			            <br>
			            <br>
			            <br>
			            <br>
			            <br>
						<li id='field_1_45' class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >

							<label class='gfield_label' for='input_1_45' >Précisez la filière</label>
							<br>
							<br>
							<div class='ginput_container ginput_container_select'>
								<select name='filiere' id='input_1_45'  class='medium-gfield_select' tabindex='2'   aria-invalid="false">
									<option value='Actuariat-Finance' >Actuariat-Finance</option>
									<option value='Statistique-Economie Appliquée' >Statistique-Economie Appliquée</option>
									<option value='Statistique-Démographie' >Statistique-Démographie</option>
									<option value='Recherche Opérationnelle et Aide à la Décision ' >Recherche Opérationnelle et Aide à la Décision</option>
									<option value='Data & Software engineering' >Data & Software engineering</option>
									<option value='Data Science' >Data Science</option>
								</select>
							</div>
						</li>

						<div class="wthree-text">
							<div class="clear"> </div>
						</div>

						<input type="submit" name = "formsend" formaction="inscription3.php" value="Suivant">
					
				</form>
				
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
</body>
</html>