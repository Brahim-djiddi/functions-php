<?php require 'dbconnexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">

                    <div class="card-body">

                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-8">
                                   <h2>Entrez l'id du client a modifier</h2>
                                    <input class="form-control" type="number" name="id1" id="id1" value="<?= $_POST['id1'];?>" >
                                </div>
                                <p>--------------------------------------------------</p>
                                 <div class="col-md-8">
                                    <label for="id">id:</label>
                                    <input class="form-control" type="text" name="id" id="id" value="<?= $_POST['id'];?>" >
                                </div>
                                <div class="col-md-8">
                                    <label for="Nom">Nom:</label>
                                    <input class="form-control" type="text" name="Nom" id="Nom" value="<?= $_POST['Nom'];?>" >
                                </div>

                                <div class="col-md-8">
                                     <label for="Prenom">Prenom:</label>
                                    <input class="form-control" type="text" name="Prenom" id="Prenom" value="<?= $_POST['Prenom'];?>" >
                                </div>

                                <div class="col-md-8">
                                     <label for="Numero">Numero:</label>
                                    <input class="form-control" type="number" id="Numero" name="Numero" value="<?= $_POST['Numero'];?>" >
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">modifier</button>
                                </div>
                                 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php 

   if(isset($_POST['id']) && isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Numero'])){
			if(!empty($_POST['id']) && !empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Numero']) ){

			$id= htmlspecialchars($_POST['id']);
			$Nom = htmlspecialchars($_POST['Nom']);
			$Prenom = htmlspecialchars($_POST['Prenom']);
			$Numero = htmlspecialchars($_POST['Numero']);


			
				if(filter_var($id,FILTER_VALIDATE_INT)){

					$contenu = $con->prepare('SELECT * FROM student WHERE id = ?');
					$contenu->execute(array($id));
					$nbLignes = $contenu->rowCount();
   
					if($nbLignes != 0){
						$modificationClient = $con->prepare('UPDATE student SET Nom=:Nom, Prenom = :Prenom , Numero =:Numero,id=:id  WHERE id = id1 limit 1');
						$modificationClient->bindValue(':id',$_POST['id'],PDO::PARAM_INT);
                        $modificationClient->bindValue(':Nom',$_POST['Nom'],PDO::PARAM_STR); 
                        $modificationClient->bindValue(':Prenom',$_POST['Pronom'],PDO::PARAM_STR); 
                        $modificationClient->bindValue(':Numero',$_POST['Numero'],PDO::PARAM_STR);  
                        echo 'bonjour';var_dump($_PO)
                        $modificationClient->execute(array("id" => $id1,
	 												   "Nom" => $Nom,
	 												   "Prenom" => $Prenom,
	 												   "Numero" => $Numero));          

						echo 'Le Client a été bien modifié !!';
					}else{
						echo 'Cet id n\'existe pas !!';
					}
				
				}else{
					echo 'Cet id est non valable !!';
				}
				
			}else{
				echo 'Attention, Tous Les Champs Sont Obligatoires !!';
			}
		}

?>


