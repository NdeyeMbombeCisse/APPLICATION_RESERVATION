<?php
include_once "connexion.php";
$id=$_GET['id'];
$sql="DELETE FROM client WHERE id=$id";
$resultat=mysqli_query($link,$sql);
if($resultat){
 header("location : index.php ? msg=New record created successefully");


}else{
    
    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($link);

}




?>