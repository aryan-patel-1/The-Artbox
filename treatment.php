<?php
include_once 'services/validateForm.php';
include_once 'services/displayErrors.php';
include_once 'services/addArtwork.php';

$errors = validateForm($_POST);

if (!empty($errors)) {
    displayErrors($errors);
    
} else {
    $data = [
        'title'       => htmlspecialchars($_POST['title']),
        'description' => htmlspecialchars($_POST['description']),
        'artist_name'     => htmlspecialchars($_POST['artist_name']),
        'image_path'       => htmlspecialchars($_POST['image_path'])
    ];

    $newId = addArtwork($data);

    header('Location: artwork.php?id=' . $newId);
    exit;
}
?>