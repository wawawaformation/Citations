<?php

$title = 'Liste des citations';
$description = 'Une description de la page en 150 caractères';
ob_start();
?>

<div class="quote my-3">
    <q><?= htmlspecialchars($quote['quote']) ?></q>
    <cite><?= htmlspecialchars($quote['author']) ?></cite>
    <div class="explanation"><?= htmlspecialchars($quote['explanation']) ?></div>
</div>

<div class="actions">
        <a href="index.php?controller=quotes&action=updateQuote&id=<?= htmlspecialchars($_GET['id'])?>">Modifier</a>
        <a href="index.php?controller=quotes&action=deleteQuote&id=<?= htmlspecialchars($_GET['id'])?>">Supprimer</a>
</div>


<?php

$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';