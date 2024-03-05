<?php 
include_once "connexion.php";
$id=$_GET['id'];
if(isset($_POST['soumetre'])){

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $emal=$_POST['email'];
    $mot_de_pass=$_POST['mot_de_pass'];
    $destination=$_POST['destination']; 


    $sql="UPDATE  client SET nom='$nom',prenom='$prenom',email='$email',mot_de_pass='$mot_de_pass',destination='$destination' WHERE id=$id";


    $resultat=mysqli_query($link,$sql);


    if($resultat){
        header("location : index.php ? msg=New record created successefully");


    }else{
        
        echo "Erreur lors de l'exécution de la requête : " . mysqli_error($link);
 
    }

 }






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo">
         <img src="voyage.png" alt=""> 
    </div>
    <nav>
        <a href="billet.php">ADD BILLET</a>
        <a href="list_billet.php">LIST_BILLET</a> 
        <a href="client.php">ADD CLIENT</a>
        <a href="list_client.php">LIST_CLIENT</a>

    </nav>
  </header> 
  <h1>VEILLEZ MODIFIER LES COORDONNE DU CLIENT</h1>
  <?php 
  $sql="SELECT * FROM client WHERE id=$id";
  $resultat=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($resultat);
  
  
  
  ?>

  <form action="" method="post">
  <img src="reservation.png" alt="">
     <fieldset> 
            
        <div class="remplir_formulaire">
            <label for="nom">quelle est le nom du client</label>
            <input type="text" name="nom" value="<?php echo $row['nom']?>">
        </div>
        <div class= "remplir_formulaire">
            <label for="prenom">quelle est le prenom du client?</label>
            <input type="text" name="prenom" value="<?php echo $row['prenom']?>">
            
        </div>

        <div class="remplir_formulaire">
            <label for="email">Quelle est l'email du client</label>
            <input type="text" name="email" value="<?php echo $row['email']?>">
        </div>

        <div class="remplir_formulaire">
            <label for="mot_de_pass">entrer le mot de pass?</label>
            <input type="password" name="mot_de_pass" value="<?php echo $row['mot_de_pass']?>">
        </div>

        <div class="remplir_formulaire">
            <label for="destination">quelle est la destination ?</label>
            <input type="text" name="destination" value="<?php echo $row['destination']?>">
        </div>
        <div>
        
        
        
        
       

        <input type="submit" value="Soumettre" name="soumetre" id="bouton">
       

    </fieldset> 


  </form>
</body>
</html>