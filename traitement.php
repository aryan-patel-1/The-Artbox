<?php
if (
    empty($_POST['titre']) ||
    empty($_POST['description']) ||
    empty($_POST['artiste']) ||
    empty($_POST['image']) ||
    strlen($_POST['description']) < 3 ||
    !filter_var($_POST['image'], FILTER_VALIDATE_URL)
) {
    // Message d'erreur simple avant de renvoyer vers le formulaire
    echo "<p style='color:red; font-weight:bold;'>Formulaire invalide, merci de le remplir correctement.</p>";
    echo "<a href='ajouter.php'> Retourner au formulaire</a>";
    exit;
    
} else {
 
  $data = [
      'titre'       => htmlspecialchars($_POST['titre']),
      'description' => htmlspecialchars($_POST['description']),
      'artiste'     => htmlspecialchars($_POST['artiste']),
      'image'       => htmlspecialchars($_POST['image'])
  ];

  // Connexion à la base
  include 'bdd.php';
  $bdd = connexion();

  // Insertion dans la table oeuvres
  $sql = 'INSERT INTO oeuvres (titre, description, artiste, image) VALUES (:titre, :description, :artiste, :image)';
  $requete = $bdd->prepare($sql);
  $requete->execute($data);

  // Redirection vers la nouvelle oeuvre
  header('Location: oeuvre.php?id=' . $bdd->lastInsertId());
  exit;
}
