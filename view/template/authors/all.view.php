<?php

$title = 'Liste des auteurs';
$description = '';

ob_start();
?>
<a href="index.php?controller=authors&action=createAuthor" class="btn btn-primary my-2">Ajouter un auteur</a>

<div class="row">
    <?php foreach ($authors as $author) : ?>
        <div class="col-12  col-md-4">
            <div class="card my-3">
                <img class="card-img-top" src="<?= $author['src'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $author['author'] ?></h5>
                    <p class="card-text"><?= substr($author['biography'], 0, 200) . '...' ?></p>
                    <div class="actions d-flex justify-content-between">
                        <a href="index.php?controller=authors&action=oneAuthor&id=<?= $author['id'] ?>" class="text-decoration-none text-secondary"><i class="bi bi-eye-fill"></i><span class="text-secondary">  Voir</span></a>
                        <a href="index.php?controller=authors&action=updateAuthor&id=<?= $author['id'] ?>" class="text-decoration-none text-secondary"><i class="bi bi-pencil-square"></i><span class="text-secondary">  Modifier</span></a>
                        <a href="index.php?controller=authors&action=deleteAuthor&id=<?= $author['id'] ?>" onClick="confirm('Voulez-vous vraiment supprimer cet auteur ?')" class="text-decoration-none text-secondary"><i class="bi bi-trash-fill"></i><span class="text-secondary">  Supprimer</span></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>


<?php
$content = ob_get_clean();

require_once ROOT . '/view/layout.view.php';
