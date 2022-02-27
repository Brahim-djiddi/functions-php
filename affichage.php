<?php require 'pages/liste.php';?>
 <?php require 'dbconnexion.php';?>
   <?php 
      
           $contenu = $con->query('SELECT * FROM student '); 
           $contenu->execute();
            $contenu->fetch();
   
		 foreach ($contenu as $ligne ) {
                 echo $ligne['id'].'-'.$ligne['Nom'] . ' ' . $ligne['Prenom'].' '. $ligne['Numero'],'<br>';
            }

		 $contenu->closeCursor();      
            
?>
   <p>Retourner menu <a href="index.php">returne</a></p>