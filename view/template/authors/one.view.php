<?php

$title = $author['author'];
$description = 'Une description de la page en 140 caractères';

ob_start();
?>


  <img  src="<?= $author['src'] ?>" alt="Nom de l'auteur">

    <h2 ><?= $author['author'] ?></h2>
    <p ><?= $author['biography'] ?></p>
   <a href="index.php?controller=authors&action=updateAuthor&id=<?= $_GET['id'] ?>"><i class="bi bi-pen-fill"></i></a>
   <a href="index.php?controller=authors&action=deleteAuthor&id=<?= $_GET['id'] ?>"><i class="bi bi-trash-fill"></i></a>
 

 
<?php
$content = ob_get_clean();

require_once ROOT . '/view/layout.view.php' ?>