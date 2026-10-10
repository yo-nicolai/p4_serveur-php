<?php

if (empty($postData['titre'])
    || empty($postData['artiste'])
    || empty($postData['image'])
    || empty($postData['description'])
    || strlen($postData['description']) < 3
    || !filter_var($_POST['image'], FILTER_VALIDATE_URL)) {
    header('Location: ajouter.php?erreur=true');
} else {

}