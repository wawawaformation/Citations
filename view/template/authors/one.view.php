<?php

$title = $author['author'];
$description = 'Une description de la page en 140 caractères';

ob_start();
?>
<div class="row">
<div class="col-12 col-md-6">
<img src="<?= $author['src'] ?>" class="w-100">
</div>

<div class="col-12 col-md-6">
  <p><?= $author['biography'] ?></p>
  <p><strong>Naissance : </strong> <?= $author['naissance_europe'] ?></p>
  <?php if (!is_null($author['deathday'])): ?>
    <p><strong>Décès : </strong> <?= $author['deces_europe'] ?></p>
  <?php endif ?>
</div>
</div>
<div class="actions d-flex my-3" style="gap: 2rem" >
  <a href="index.php?controller=authors&action=updateAuthor&id=<?= $_GET['id'] ?>"><i class="bi bi-pen-fill"></i> Modifier</a>
  <a href="index.php?controller=authors&action=deleteAuthor&id=<?= $_GET['id'] ?>"><i class="bi bi-trash-fill"></i >Supprimer</a>
</div>




<?php
$content = ob_get_clean();

require_once ROOT . '/view/layout.view.php' ?>