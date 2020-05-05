<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Album example · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="styles/styles.css">
</head>

<style>
    .card p {
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', '');
$request = "SELECT * FROM logement";
$response = $bdd->query($request);
$logement = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<header class="container">

    <div class="row">

        <a href="add.php"><button class="btn btn-primary">Ajouter un logement</button></a>

    </div>

</header>

<body class="container">

    <div class="row">

        <!-- Logements foreach -->
        <?php foreach ($logement as $appart) : ?>
            <div class="col-md-4">
                <div class="card my-2 mx-1 text-truncate" style="max-height: 600px;">
                    <div class="card-body" id="<?= $appart['id_logement'] ?>">

                        <img class="card-img-top" src="<?= $appart["photo"] ?>" alt="Image du bien" style="max-height: 200px; width: 100%"></img>

                        <p class="card-title text-center lead"> <?= $appart["titre"] ?> </p>

                        <p class="card-text">
                            <?= $appart["adresse"] ?> <br>
                            <?= $appart["cp"] ?> <?= $appart["ville"] ?>
                        </p>

                        <p class="card-text">Surface : <?= $appart["surface"] ?> m²</p>

                        <p class="card-text">Prix : <?= $appart["prix"] ?> €</p>

                        <p class="card-text">Type : <?= $appart["type"] ?></p>

                        <p class="card-text"><?= $appart["description"] ?></p>

                        <a href="delete.php?id=<?= $appart['id_logement'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Supprimer</button></a>

                        <a href="show.php?id=<?= $appart['id_logement'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary ml-2">En savoir plus</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

</body>