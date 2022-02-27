<?php require 'dbconnexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supression</title>
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                                   <h2>Entrez l'id du client a supprimer</h2>
                                    <input class="form-control" type="number" name="id" id="id" value="<?= $_POST['id'];?>" >
                                    <button type="submit" class="btn btn-primary">suppression</button>
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

 if(isset($_POST['id'])){
		 	if(!empty($_POST['id'])){
				
		 		$id = htmlspecialchars($_POST['id']);
	
		 		if(filter_var($id,FILTER_VALIDATE_INT)){
                     
		 			$testId = $con->prepare('SELECT * FROM student WHERE id = ?');
		 			$testId->execute(array($id));

		 			$nbLignes = $testId->rowCount();

		 			if($nbLignes != 0){
						
		 				$suppressionClient = $con->prepare('DELETE FROM student WHERE id = ?');
		 				$suppressionClient->execute(array($id));
						
		 				echo 'Le Client a été bien supprimé !!';
		 			}else{
		 				echo 'Cet id n\'existe pas !!';
		 			}
				

		 		}else{
		 			echo 'Cet id est non valable !!';
		 		}
				
		 	}else{
		 		echo 'Attention, Ce Champ est Obligatoire !!';
		 	}
		 }

?>

   <p>Retourner menu <a href="index.php">returne</a></p>