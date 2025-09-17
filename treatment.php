<?php
include 'request/validateForm.php';
include 'request/displayErrors.php';
include 'request/addArtwork.php';

$errors = validateForm($_POST);

if (!empty($errors)) {
    displayErrors($errors);
    exit;
} else {
    $data = [
        'title'       => htmlspecialchars($_POST['title']),
        'description' => htmlspecialchars($_POST['description']),
        'artist'     => htmlspecialchars($_POST['artist']),
        'image'       => htmlspecialchars($_POST['image'])
    ];

    $newId = addArtwork($data);

    header('Location: artwork.php?id=' . $newId);
    exit;
}
?>