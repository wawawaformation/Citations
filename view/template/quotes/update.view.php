<?php

$title = 'Modifier la citation';
$description = 'Une description de la page en 150 caractères';
ob_start();
?>

<form action="index.php?controller=quotes&action=updateQuote&id=<?=$_GET['id'] ?>"method="post">
<div class="mb-3">
    <label for="quote" class="form-label">La nouvelle citation</label><br>
    <input type="text" placeholder="Modification de la citation..." class="form-control" id="quote" name="quote">
</div>
<div class="mb-3">
    <label for="author_id" class="form-label">Auteur</label><br>
    <select id="authors_id" name="authors_id" class="form-select">
        <option value="0">Anonyme</option>
        <?php foreach($authors as $author): ?>
            <option value="<?= htmlspecialchars($author['id']) ?>"><?= htmlspecialchars($author['author']) ?></option>
        <?php endforeach ?>
    </select>
</div>

<div class="mb-3">
    <label for="explanation" class="form-label">Explication</label><br>
    <textarea id="explanation" placeholder="Modification des explications de cette citation..." name="explanation" rows="6" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-primary">Ajouter</button>

</form>
<?php

$content = ob_get_clean();

require_once ROOT . '/view/layout.view.php';