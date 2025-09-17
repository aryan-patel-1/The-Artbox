<?php
include_once 'connection.php';
function getArtworkById($id) {
    $database = connection();
    $query = $database->prepare('SELECT * FROM artworks WHERE id = :id');
    $query->execute(['id' => $id]);
    return $query->fetch();
}

?>
