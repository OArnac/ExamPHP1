<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Ajouter un logement</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <a href="index.php"><button class="btn btn-primary">Retour à l'accueil</button></a><br><br>

                    <h1 class="h1">Ajouter un logement</h1>

                    <!-- Formulaire d'ajout -->
                    <form action="addTraitement.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="">Titre</label>
                            <input type="text" name="titre" id="" maxlength="150" required>
                        </div>

                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" name="adresse" id="" maxlength="200" required>
                        </div>

                        <div class="form-group">
                            <label for="">Ville</label>
                            <input type="text" name="ville" id="" maxlength="100" required>
                        </div>

                        <div class="form-group">
                            <label for="">Code postal</label>
                            <input type="number" name="cp" id="" min="0" step="1" minlength="5" maxlength="5" required>
                        </div>

                        <div class="form-group">
                            <label for="">Surface (en m²)</label>
                            <input type="number" name="surface" id="" min="0" step="1" maxlength="10" required>
                        </div>

                        <div class="form-group">
                            <label for="">Prix (en €)</label>
                            <input type="number" name="prix" id="" min="0" step="1" maxlength="10" required>
                        </div>

                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type" id="" required>
                                <option value="location">Location</option>
                                <option value="vente">Vente</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" id="" maxlength="500" rows="3">
                        </div>

                        <div class="form-group">
                            <label for="">Ajouter une photo</label>
                            <input type='file' name='photo' />
                        </div>

                        <input type='submit' class="btn btn-primary" value='Ajouter un logement' name='uploadLogement'>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<?php


?>