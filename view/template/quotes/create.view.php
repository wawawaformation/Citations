<?php

$title = 'Ajouter une citation';
$description = 'Une description de la page en 150 caractères';
ob_start();
?>

<form action="index.php?controller=quotes&action=createQuote" method="post">
<div class="mb-3">
    <label for="quote" class="form-label">La citation</label><br>
    <input type="text" class="form-control" id="quote" name="quote">
</div>
<div class="mb-3">
    <label for="quote" class="form-label">Auteur</label><br>
    <select id="authors_id" name="authors_id">
        <option value="0">Anonyme</option>
        <?php foreach($authors as $author): ?>
            <option value="<?= $author['id'] ?>"><?= $author['author'] ?></option>
        <?php endforeach ?>
    </select>
</div>

<div class="mb-3">
    <label for="explanation" class="form-label">Explication</label><br>
    <textarea id="explanation" name="explanation"></textarea>
</div>
<button type="submit" class="btn btn-primary">Ajouter</button>

</form>
<?php

$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';