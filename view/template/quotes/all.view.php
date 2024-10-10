<?php
/*echo '<pre>';
print_r($quotes);
echo '</pre>';*/
$title = 'Liste des citations';
$description = 'Une description de la page en 150 caractères';
ob_start();
?>

<a href="index.php?controller=quotes&action=createQuote" class="btn btn-primary">Ajouter une citation</a>
<?php foreach($quotes as $quote): ?>
<div class="quote my-3">
    <q><?= htmlspecialchars($quote['quote'])?></q>
    <cite><?= htmlspecialchars($quote['author'])?></cite>
    <div class="actions d-flex gap-3">
        <a href="index.php?controller=quotes&action=oneQuote&id=<?= htmlspecialchars($quote['id_quotes'])?>"><i class="bi bi-eye-fill"></i> Voir</a>
        <a href="index.php?controller=quotes&action=updateQuote&id=<?= htmlspecialchars($quote['id_quotes'])?>"><i class="bi bi-pen-fill"></i> Modifier</a>
        <a href="index.php?controller=quotes&action=deleteQuote&id=<?= htmlspecialchars($quote['id_quotes'])?>"><i class="bi bi-trash-fill"></i>Supprimer</a>
    </div>
</div>


<?php endforeach ?> 

<?php
$content = ob_get_clean();
require ROOT . '/view/layout.view.php';