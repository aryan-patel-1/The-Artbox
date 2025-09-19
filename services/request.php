<?php 
include_once 'connection.php';
function getAllArtworks() {
    $database = connection() ; 
    $query = $database->query("SELECT * FROM artwork");
    return $query->fetchAll();
}

function getArtworkById($id) {
    $database = connection();
    $query = $database->prepare('SELECT * FROM artwork WHERE id = :id');
    $query->execute(['id' => $id]);
    
    return $query->fetch();
}


?>