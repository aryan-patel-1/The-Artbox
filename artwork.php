<?php
require 'header.php';
include('request/connection.php');
include 'request/getArtworkById.php' ; 

$database = connection(); // Connection à la BDD

$id = (int)$_GET['id']; // Variable id

// Si l'URL ne contient pas d'id ou id invalide, redirection 
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$artwork = getArtworkById($id) ; 

// Si aucune œuvre trouvée, redirection
if (!$artwork) {
    header('Location: index.php');
    exit;
}
?>

<article id="detail-artwork">
    <div id="img-artwork">
        <img src="<?= $artwork['image'] ?>" alt="<?= $artwork['title'] ?>">
    </div>
    <div id="content-artwork">
        <h1><?= $artwork['title'] ?></h1>
        <p class="description"><?= $artwork['artist'] ?></p>
        <p class="description-complet"><?= $artwork['description'] ?></p>
    </div>
</article>

<?php require 'footer.php'; ?>
