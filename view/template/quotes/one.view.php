<?php

$title = 'Liste des citations';
$description = 'Une description de la page en 150 caractères';
ob_start();
?>

<div class="quote my-3">
    <q><?= $quote['quote'] ?></q>
    <cite><?= $quote['author'] ?></cite>
    <div class="explanation"><?= $quote['explanation'] ?></div>
</div>

<div class="actions">
        <a href="index.php?controller=quotes&action=updateQuote&id=<?= $_GET['id']?>">Modifier</a>
        <a href="index.php?controller=quotes&action=deleteQuote&id=<?= $_GET['id']?>">Supprimer</a>
</div>


<?php

$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';