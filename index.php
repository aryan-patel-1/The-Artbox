<?php
    require 'header.php';
    include 'request/connection.php' ; 
    include 'request/getAllArtwork.php' ;
    $database = connection();   
    $artworks = getAllArtworks() ;                               
       
?>
<div id="list-artworks">
    <?php foreach($artworks as $artwork): ?>
        <article class="artwork">
            <a href="artwork.php?id=<?= $artwork['id'] ?>">
                <img src="<?= $artwork['image'] ?>" alt="<?= $artwork['title'] ?>">
                <h2><?= $artwork['title'] ?></h2>
                <p class="description"><?= $artwork['artist'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>
<?php require 'footer.php'; ?>
