<?php
	include_once 'database1.php';
	if(isset($_POST['save']))
	{	 
		 $nom = $_POST['nom'];
		 $prenom = $_POST['prenom'];
		 $password = $_POST['password'];
		 $email = $_POST['email'];
		 $sql = "INSERT INTO inscription (nom,prenom,password,email)
		 VALUES ('$nom','$prenom','$password','$email')";
		 if (mysqli_query($conn, $sql)) {
			echo "New record created successfully !";
		 } else {
			echo "Error: " . $sql . "
	" . mysqli_error($conn);
		 }
		 mysqli_close($conn);
}
?>