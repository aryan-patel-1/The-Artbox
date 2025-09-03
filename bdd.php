<?php
function connexion() {
    try {
        $dsn = 'mysql:host=' . 'localhost' . ';dbname=' . 'artbox'; 
        $bdd = new PDO($dsn, 'root', '');                             // Création de l'objet PDO
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO lance une erreur si ça ne marche pas
        return $bdd;                                                  
    } catch (PDOException $e) {
        die('Erreur de connexion : ' . $e->getMessage());             // Message si la connexion échoue
    }
}
?>