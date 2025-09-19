<?php
    require_once 'header.php';
    include_once 'services/connection.php' ; 
    include_once 'services/request.php' ;
    $database = connection();   
    $artworks = getAllArtworks() ;                               
       
?>
<div id="list-artworks">
    <?php foreach($artworks as $artwork): ?>
        <article class="artwork">
            <a href="artwork.php?id=<?= $artwork['id'] ?>">
                <img src="<?= $artwork['image_path'] ?>" alt="<?= $artwork['title'] ?>">
                <h2><?= $artwork['title'] ?></h2>
                <p class="description"><?= $artwork['artist_name'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>
<?php require_once 'footer.php'; ?>
