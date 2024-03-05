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

    </nav>
  </header> 
  <h1>LISTE DES BILLETS</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">PRIX</th>
                <th scope="col">STATUT</th>
                <th scope="col">DESTINATION</th>
                <th scope="col">DATE RESERVATION</th>
                <th scope="col">HEURE RESERVATION</th>
                <th scope="col">MODIFIER</th>
                <th scope="col">SUPPRIMER</th>
                
            </tr>
        </thead>
       
        <tbody>
            <?php
                include_once "connexion.php";
                $sql="SELECT * FROM billet";
                $result=mysqli_query($link,$sql);
                while ($row =mysqli_fetch_assoc($result)){
            ?> 
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['prix']?></td>
                    <td><?php echo $row['statut']?></td>
                    <td><?php echo $row['destination']?></td>
                    <td><?php echo $row['date_reservation']?></td>
                    <td><?php echo $row['heure_reservation']?></td>
                    <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="modifier"><p>Modifier</p></a></td>
                    <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="supp">supprimer</a></td>
                </tr> 
                <?php
                }?>
            
            </tbody>
    </table>

    
  </body>