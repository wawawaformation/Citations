<?php

$title = 'Liste des utilisateurs';
$desciption = '';
ob_start();
?>
<div class="add my-3">
    <a href="index.php?controller=users&action=createUser" class="btn btn-primary">Ajouter un utilisateur</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>mail</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['firstname'] ?></td>
                <td><?= $user['lastname'] ?></td>
                <td><?= $user['mail'] ?></td>
                <td>
                    <a href="index.php?controller=users&action=oneUser&id=<?= $user['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                    <a href="index.php?controller=users&action=updateUser&id=<?= $user['id'] ?>"><i class="bi bi-pen-fill"></i></a>
                    <a href="index.php?controller=users&action=deleteUser&id=<?= $user['id'] ?>"><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<?php
$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';