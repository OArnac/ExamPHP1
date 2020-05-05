<?php
$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', '');
$id = $_GET["id"];
$request = "DELETE FROM logement WHERE id_logement=$id";

$response = $bdd->query($request);

echo '<script type="text/javascript">
        window.location = "index.php"
    </script>';
?>