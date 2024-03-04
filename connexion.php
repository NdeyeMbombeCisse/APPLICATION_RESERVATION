<?php 
/* Database connexion */
$servername="localhost";
$username ="root";
$password = "Mbombe@78400$";
$dbname = "reservation";

/* Connexion à la base de données */
$link = mysqli_connect($servername,$username,$password,$dbname);
/* verifier connection */
if(!$link ){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




?>