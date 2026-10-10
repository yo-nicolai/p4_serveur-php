<?php
require 'bdd.php';

$postData = $_POST;

if (empty($postData['titre'])
    || empty($postData['artiste'])
    || empty($postData['image'])
    || empty($postData['description'])
    || strlen($postData['description']) < 3
    || !filter_var($_POST['image'], FILTER_VALIDATE_URL)) {
    header('Location: ajouter.php?erreur=true');
} else {
    $bdd = connexion();
    $sqlQuery = 'INSERT INTO oeuvres (titre, artiste, image, description) VALUES (:titre, :artiste, :image, :description)';
    $oeuvreStatement = $bdd->prepare($sqlQuery);
    $oeuvreStatement->execute([
        'titre' => $_POST['titre'],
        'artiste' => $_POST['artiste'],
        'image' => $_POST['image'],
        'description' => $_POST['description']
    ]);

    header('Location: index.php');

}