<?php

$postData = $_POST;

$titre = htmlspecialchars($postData['titre'] ?? '');
$artiste = htmlspecialchars($postData['artiste'] ?? '');
$image = htmlspecialchars($postData['image'] ?? '');
$description = htmlspecialchars($postData['description'] ?? '');

if (
    !isset($postData['titre'], $postData['artiste'], $postData['image'], $postData['description'])
    || empty($postData['titre'])
    || empty($postData['artiste'])
    || empty($postData['image'])
    || empty($postData['description'])
    || strlen($postData['description']) < 3
    || !str_starts_with($postData['image'], 'https://')
) {
    echo 'Tous les champs obligatoires doivent être remplis.';
    return;
}
 