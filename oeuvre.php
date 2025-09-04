<?php
require 'header.php';
include('bdd.php');

$bdd = connexion(); // Connexion à la BDD

// Si l'URL ne contient pas d'id ou id invalide, redirection 
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$id = (int)$_GET['id'];

// Requête préparée pour récupérer l'oeuvre correspondante
$recup = $bdd->prepare('SELECT * FROM oeuvres WHERE id = :id');
$recup->execute(['id' => $id]);
$oeuvre = $recup->fetch();

// Si aucune œuvre trouvée, redirection
if (!$oeuvre) {
    header('Location: index.php');
    exit;
}
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['titre'] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $oeuvre['titre'] ?></h1>
        <p class="description"><?= $oeuvre['artiste'] ?></p>
        <p class="description-complete"><?= $oeuvre['description'] ?></p>
    </div>
</article>

<?php require 'footer.php'; ?>
