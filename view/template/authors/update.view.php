<?php

$title = "Modification de l'auteur";
$description = '';

ob_start();
?>


<form action="index.php?controller=authors&action=updateAuthor&id=<?= $_GET['id'] ?>" method="post"
    enctype="multipart/form-data">
    <div class="form-group my-3">
        <label for="author">Nom de l'auteur</label>
        <input type="text" class="form-control" id="author" placeholder="Nom de l'auteur" name="author"
            value="<?= $author['author'] ?>">
    </div>
    <div class="form-group my-3">
        <label for="biography" class="form-label">Biographie de l'auteur</label>
        <textarea class="form-control" id="biography" rows="3" name="biography"><?= $author['biography'] ?></textarea>
    </div>
    <div class="form-group my-3">
        <label for="birthday">Date de naissance</label>
        <input type="date" class="form-control" id="birthday" placeholder="jj/mm/aa" name="birthday"
            value="<?= $author['birthday'] ?>">
    </div>
    <div class="form-group my-3">
        <label for="deathday">Date de décès</label>
        <input type="date" class="form-control" id="deathday" placeholder="jj/mm/aa" name="deathday"
            value="<?= $author['deathday'] ?>">
    </div>
    


    <div class="form-group my-3">
        <img src="<?= $author['src'] ?>" alt="" width="200"><br>

        <input type="radio" id="oui" name="garder_img" value="oui" checked>
        <label for="oui">Garder l'image</label><br>

        <input type="radio" id="non" name="garder_img" value="non">
        <label for="non">Supprimer l'image</label>

    </div>
    <div class="form-group my-3">
        
        <label for="src">Charger une nouvelle image</label>
        <input type="file" class="form-control" id="src"  name="src">
       
    </div>




    <button type="submit" class="submit btn btn-primary my-3">Modifier</button>
</form>



<?php 

$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php' ?>