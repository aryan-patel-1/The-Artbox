<?php 
include_once 'connection.php';
function getAllArtworks() {
    $database = connection() ; 
    $query = $database->query("SELECT * FROM artworks");
    return $query->fetchAll();
}

?>