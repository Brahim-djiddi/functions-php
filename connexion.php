


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
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
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
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


  

