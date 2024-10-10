<?php
/*echo '<pre>';
print_r($quotes);
echo '</pre>';*/
$title = 'Liste des citations';
$description = 'Une description de la page en 150 caractères';
ob_start();
?>

<a href="index.php?controller=quotes&action=createQuote" class="btn btn-primary mb-5">Ajouter une citation</a>
<?php foreach ($quotes as $quote): ?>
    <div class="quote my-2 d-flex justify-content-between">
        <div>
            <q><?= htmlspecialchars($quote['quote']) ?></q>
            <cite><?= htmlspecialchars($quote['author']) ?></cite>
        </div>
        <div>
            <div class="actions d-flex gap-5">
                <a href="index.php?controller=quotes&action=oneQuote&id=<?= htmlspecialchars($quote['id_quotes']) ?>" class="text-secondary"><i class="bi bi-eye-fill"></i><span class="text-secondary"> Voir</span></a>
                <a href="index.php?controller=quotes&action=updateQuote&id=<?= htmlspecialchars($quote['id_quotes']) ?>" class="text-secondary"><i class="bi bi-pen-fill"></i><span class="text-secondary"> Modifier</span></a>
                <a href="index.php?controller=quotes&action=deleteQuote&id=<?= htmlspecialchars($quote['id_quotes']) ?>" class="text-secondary"><i class="bi bi-trash-fill"></i><span class="text-secondary">Supprimer</span></a>
            </div>
        </div>
    </div>
    <hr>


<?php endforeach ?>

<?php
$content = ob_get_clean();
require ROOT . '/view/layout.view.php';
