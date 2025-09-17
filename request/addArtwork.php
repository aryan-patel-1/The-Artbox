<?php 
include_once 'connection.php';
function addArtwork($data) {
    $database = connection();
    
    $sql = 'INSERT INTO artworks (title, description, artist, image) VALUES (:title, :description, :artist, :image)';
    $query = $database->prepare($sql);
    $query->execute($data);
    
    return $database->lastInsertId();
}
?>