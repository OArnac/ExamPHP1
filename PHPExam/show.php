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


<?php

$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', '');
$id = $_GET["id"];
$request = "SELECT * FROM logement WHERE id_logement=$id";
$response = $bdd->query($request);
$appart = $response->fetch(PDO::FETCH_ASSOC);

// var_dump($response);
// var_dump($appart);
?>

<body class="text-center">
    
    <h1><?=$appart['titre']?></h1>

    <img src="<?=$appart['photo']?>" alt="" width="40%">

    <p>Adresse : <?=$appart['adresse']?> <?=$appart['cp']?> <?=$appart['ville']?></p>

    <p>Surface : <?=$appart['ville']?> m²</p>

    <p>Prix : <?=$appart['prix']?> €</p>

    <p><?=$appart['description']?></p>

    <a href="index.php"><button class="btn btn-primary">Retour à l'accueil</button></a><br><br>

</body>

