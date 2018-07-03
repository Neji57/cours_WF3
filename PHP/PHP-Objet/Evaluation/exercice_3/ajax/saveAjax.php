<?php

if (!empty($_POST)) {
    if (empty($_POST['nom']) || empty($_POST['modele']) || empty($_POST['annee']) || empty($_POST['couleur'])) {
        $result = array(
            "code" => "error",
            "message" => "Les données ne doivent pas être vide"
        );
    } else {

        $pdo = new PDO(
            'mysql:host=localhost; dbname=vehicule;
            charset=utf8',
            'root',
            'root' // Le mot de passe doit être 'root' sous mac OS X
        );
         $query = $pdo->prepare('INSERT INTO vehicule (marque, modele, annee, couleur) VALUES (:marque, :modele, :annee, :couleur)');
         $query->bindValue(':marque', $marque);
         $query->bindValue(':modele', $modele);
         $query->bindValue(':annee', $annee);
         $query->bindValue(':couleur', $couleur);
         $query->execute();

        $result = array(
            "code" => "success",
            "message" => "Les données ont été envoyées"
        );
    }

} else {
    $result = array(
        "code" => "error",
        "message" => "Les données n'ont pas été envoyées"
    );
}

var_dump($_POST);

header("Content-Type: application/json");
echo json_encode($result, JSON_PRETTY_PRINT);
// echo JSON