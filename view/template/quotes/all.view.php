<?php
/*echo '<pre>';
print_r($quotes);
echo '</pre>';*/
$title = 'Liste des citations';
$description = 'Une description de la page en 150 caractères';
ob_start();
?>

<a href="index.php?controller=quotes&action=createQuote">Ajouter une citation</a>
<?php foreach($quotes as $quote): ?>
<div class="quote my-3">
    <q><?= $quote['quote']?></q>
    <cite><?= $quote['author']?></cite>
    <div class="actions">
        <a href="index.php?controller=quotes&action=oneQuote&id=<?= $quote['id_quotes']?>">Voir</a>
        <a href="index.php?controller=quotes&action=updateQuote&id=<?= $quote['id_quotes']?>">Modifier</a>
        <a href="index.php?controller=quotes&action=deleteQuote&id=<?= $quote['id_quotes']?>">Supprimer</a>
    </div>
</div>


<?php endforeach ?> 

<?php
$content = ob_get_clean();
require ROOT . '/view/layout.view.php';