<?php
require_once 'header.php';
include_once('services/connection.php');
include_once('services/request.php') ; 

// Si l'URL ne contient pas d'id ou id invalide, redirection 
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$database = connection(); // Connection à la BDD
$id = (int)$_GET['id']; // Variable id


$artwork = getArtworkById($id) ; 

// Si aucune œuvre trouvée, redirection
if (!$artwork) {
    header('Location: index.php');
    exit;
}
?>

<article id="detail-artwork">
    <div id="img-artwork">
        <img src="<?= $artwork['image_path'] ?>" alt="<?= $artwork['title'] ?>">
    </div>
    <div id="content-artwork">
        <h1><?= $artwork['title'] ?></h1>
        <p class="description"><?= $artwork['artist_name'] ?></p>
        <p class="description-complet"><?= $artwork['description'] ?></p>
    </div>
</article>

<?php require_once 'footer.php'; ?>
