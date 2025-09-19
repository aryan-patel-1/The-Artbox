<?php 
include_once 'connection.php';

function addArtwork($data) {
    $database = connection();
    
    $sql = 'INSERT INTO artwork (title, description, artist_name, image_path) VALUES (:title, :description, :artist_name, :image_path)';
    $query = $database->prepare($sql);
    $query->execute($data);
    
    return $database->lastInsertId();
}
?>