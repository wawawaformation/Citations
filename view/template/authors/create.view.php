<?php
$title = 'Ajouter un auteur';
$description = '';

ob_start();
?>
<form action="index.php?controller=authors&action=createAuthor" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="author">Nom de l'auteur</label>
    <input type="text" class="form-control" id="author" placeholder="Nom de l'auteur" name="author">
  </div>
  <div class="form-group">
  <label for="biography" class="form-label">Biographie de l'auteur</label>
  <textarea class="form-control" id="biography" rows="3" name="biography"></textarea>
  </div>
  <div class="form-group">
    <label for="birthday">Date de naissance</label>
    <input type="date" class="form-control" id="birthday" placeholder="jj/mm/aa" name="birthday">
  </div>
  <div class="form-group">
  <label for="deathday">Date de décès</label>
  <input type="date" class="form-control" id="deathday" placeholder="jj/mm/aa" name="deathday">
  </div>
  <div class="form-group">
  <label for="src"></label>
  <input type="file" class="form-control" id="src" name="src">
  </div>
  <button type="submit" class="submit btn btn-primary my-2">Ajouter</button>
</form>

<?php $content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';
