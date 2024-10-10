<?php

$title = 'Liste des auteurs';
$description = '';

ob_start();
?>
<a href="index.php?controller=authors&action=createAuthor" class="btn btn-primary my-2">Ajouter un auteur</a>

<div class="row">
    <?php foreach ($authors as $author) : ?>
        <div class="col-4">
            <div class="card my-3">
                <img class="card-img-top" src="<?= $author['src'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $author['author'] ?></h5>
                    <p class="card-text"><?= substr($author['biography'], 0 ,200) . '...' ?></p>
                    <a href="index.php?controller=authors&action=oneAuthor&id=<?= $author['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                    <a href="index.php?controller=authors&action=updateAuthor&id=<?= $author['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                    <a href="index.php?controller=authors&action=deleteAuthor&id=<?= $author['id'] ?>"><i class="bi bi-trash-fill"></i></a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?php
$content = ob_get_clean();

require_once ROOT . '/view/layout.view.php';
