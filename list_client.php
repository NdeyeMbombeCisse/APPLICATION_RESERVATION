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
  <h1>LISTE DES CLIENTS</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">EMAIL</th>
                <th scope="col">MOT DE PASS</th>
                <th scope="col">DESTINATION</th>
                <th scope="col">MODIFIER</th>
                <th scope="col">SUPPRIMER</th>
                
            </tr>
        </thead>
       
        <tbody>
            <?php
                include_once "connexion.php";
                $sql="SELECT * FROM client";
                $result=mysqli_query($link,$sql);
                while ($row =mysqli_fetch_assoc($result)){
            ?> 
                <tr>
                <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nom']?></td>
                    <td><?php echo $row['prenom']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['mot_de_pass']?></td>
                    <td><?php echo $row['destination']?></td>
                    <td><a href="modify_client.php?id=<?php echo $row['id'] ?>" class="modifier"><p>Modifier</p></a></td>
                    <td><a href="sup_client.php?id=<?php echo $row['id'] ?>" class="supp">supprimer</a></td>
                </tr> 
                <?php
                }?>
            
            </tbody>
    </table>

    
  </body>