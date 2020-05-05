<?php 
$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', '');

// var_dump( $_POST);

if (isset($_POST['uploadLogement'])) {

    // Créer le dossier upload si il n'existe pas déjà
    if(!file_exists('upload/')) {
    mkdir('upload/', 0755, true);}

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    
    // Extraction de l'extension du fichier
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Extensions valides
    $extensions_arr = array("jpg", "jpeg", "png", "gif");
    
    // Format du nom du fichier uploadé
    $name = "logement" . time() . "." . $imageFileType;

    // Comparaison de l'extension avec les valides
    if (in_array($imageFileType, $extensions_arr)) {
        
        // Upload file
        move_uploaded_file($_FILES['photo']['tmp_name'], $target_dir . $name);

    };

        // Add to db
        $request = "INSERT INTO logement (titre, adresse, ville, cp, surface, prix, type, description, photo)
            VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :type, :description, :photo)";
        $response = $bdd->prepare($request);
        $response->execute([
        'titre'             => $_POST['titre'],
        'adresse'           => $_POST['adresse'],
        'ville'             => $_POST['ville'],
        'cp'                => $_POST['cp'],
        'surface'           => $_POST['surface'],
        'prix'              => $_POST['prix'],
        'type'              => $_POST['type'],
        'description'       => $_POST['description'],
        'photo'             => $target_dir.$name,
        ]);
    // var_dump($request);
    // var_dump($response);
}


echo '<script type="text/javascript">
        window.location = "index.php"
    </script>';
