<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetweb";

// Création de la  connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Tester la connexion 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>