<?php

$title = $author['author'];
$description = 'Une description de la page en 140 caractères';

ob_start();
?>


  <img  src="<?= $author['src'] ?>">

   
    <p ><?= $author['biography'] ?></p>
    <p><strong>Naissance : </strong> <?= $author['naissance_europe'] ?></p>
    <?php if(!is_null($author['deathday'])): ?>
      <p><strong>Décès : </strong> <?= $author['deces_europe'] ?></p>
    <?php endif ?>
   <a href="index.php?controller=authors&action=updateAuthor&id=<?= $_GET['id'] ?>"><i class="bi bi-pen-fill"></i></a>
   <a href="index.php?controller=authors&action=deleteAuthor&id=<?= $_GET['id'] ?>"><i class="bi bi-trash-fill"></i></a>
 

 
<?php
$content = ob_get_clean();

require_once ROOT . '/view/layout.view.php' ?>