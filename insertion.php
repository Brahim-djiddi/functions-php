 <?php require 'pages/ajouter.php';?>
 <?php require 'dbconnexion.php';?>
   <?php 

          
          if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Numero']) )
            { 
                if (!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Numero'])) 
                {
                    $Nom =htmlspecialchars($_POST['Nom']);
                    $Prenom =htmlspecialchars($_POST['Prenom']);
                    $Numero =htmlspecialchars($_POST['Numero']);

                     $inserer=$con->prepare('SELECT * FROM student WHERE Nom=?');
                     $inserer->execute(array($Nom));
                     $nomExiste=$inserer->rowCount();

                     if ($nomExiste==0) {
                        $inserer=$con->prepare('INSERT INTO student(Nom,Prenom,Numero) VALUES(?,?,?)');
                        $inserer->execute(array($Nom,$Prenom,$Numero));
                        echo 'bien ajouter';
                     }else {
                           echo 'Le nom existe deja';
                     }  
                             
                }else {
                    echo 'erreur ajouter'; 
                } 
            }
 
?>
   <p>Retourner menu <a href="index.php">returne</a></p>