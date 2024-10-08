<?php

$title = 'Ajouter un nouvel utilisateur';
$desciption = '';
ob_start();
?>

<form action="index.php?controller=users&action=createUser" method="post">

    <div class="mb-3">
        <label for="firstname" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Nom</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Mail</label>
        <input type="email" class="form-control" id="mail" name="mail">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="submit btn btn-primary">Ajouter un utilisateur</button>

</form>


<?php
$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';
