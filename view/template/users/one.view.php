<?php

$title = 'Liste des utilisateurs';
$desciption = '';
ob_start();
?>
<dl>
    <dt>Prénom</dt>
    <dd><?= $user['firstname'] ?></dd>

    <dt>Nom</dt>
    <dd><?= $user['lastname'] ?></dd>

    <dt>Mail</dt>
    <dd><?= $user['mail'] ?></dd>

    <dt>Date de création</dt>
    <dd><?= $user['created'] ?></dd>
</dl>

<div class="actions">
<a href="index.php?controller=users&action=updateUser&id=<?= $_GET['id'] ?>"><i class="bi bi-pen-fill"></i> Modifier</a>
<a href="index.php?controller=users&action=deleteUser&id=<?= $_GET['id'] ?>"><i class="bi bi-trash-fill"></i> Supprimer</a>
</div>

<?php
$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';