<?php require_once 'header.php'; ?> 

<form action="treatment.php" method="POST">
    <div class="champ-formulaire"> 
        <label for="title">Titre de l'œuvre</label>
        <input type="text" name="title" id="title"> 
    </div>
    <div class="champ-formulaire">
        <label for="artist_name">Auteur de l'œuvre</label>
        <input type="text" name="artist_name" id="artist_name">
    </div>
    <div class="champ-formulaire">
        <label for="image_path">URL de l'image</label>
        <input type="url" name="image_path" id="image_path">
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <input type="submit" value="Valider" name="submit">
</form>

<?php require_once 'footer.php'; ?>
