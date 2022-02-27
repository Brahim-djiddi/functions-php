<?php require 'pages/chercher.php';?>

 <?php require 'dbconnexion.php';?>
   <?php 

          if(isset($_POST['id']))
            {  
              if (!empty($_POST['id'])) 
              {
             
                     $id =htmlspecialchars($_POST['id']);
                     $contenu =$con->prepare("SELECT * FROM student WHERE id=? ");
                     $contenu->execute(array($id));
                     
                 while($ligne = $contenu->fetch())
                  { 
                  echo $ligne['id'].'-'.$ligne['Nom'] . ' ' . $ligne['Prenom'].' '. $ligne['Numero'],'<br>';
		             }
              }      
          }       
           
?>
   <p>Retourner menu <a href="index.php">returne</a></p>