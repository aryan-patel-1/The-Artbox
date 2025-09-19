<?php
function connection() {
    try {
        $dsn = 'mysql:host=' . 'localhost' . ';dbname=' . 'artbox'; 
        $database = new PDO($dsn, 'root', '');                             // Création de l'objet PDO
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO lance une erreur si ça ne marche pas
        return $database;                                                  
    } catch (PDOException $e) {
        die('Erreur de connexion : ' . $e->getMessage());             // Message si la connexion échoue
    }
}
?>