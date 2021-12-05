<?php
	try
	{
		$conn = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
      
		$req = $conn->prepare('INSERT INTO inscription (nom,prenom,sexe,dnaissance,email,password) VALUES (?,?, ?, ?, ?, ?)');
		$req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['sexe'],$_POST['dnaissance'],$_POST['email'],$_POST['password']));		
?>