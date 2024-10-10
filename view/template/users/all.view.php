<?php

$title = 'Liste des utilisateurs';
$description = 'test';
ob_start();
?>

<a href="index.php?controller=users&action=createUser" class="btn btn-primary my-3">Ajouter un utilisateur</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Mail</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= ucfirst(strtolower($user['firstname'])) ?></td>
                <td><?= strtoupper($user['lastname']) ?></td>
                <td><?= $user['mail'] ?></td>
                <td class="actions d-flex justify-content-between">
                    <a href="index.php?controller=users&action=oneUser&id=<?= $user['id'] ?>"><i
                            class="bi bi-eye-fill"></i> Voir</a>
                    <a href="index.php?controller=users&action=updateUser&id=<?= $user['id'] ?>"><i
                            class="bi bi-pen-fill"></i> Modifier</a>
                    <a href="index.php?controller=users&action=deleteUser&id=<?= $user['id'] ?>"
                        onclick="return confirm('Es-tu sûr de vouloir supprimer cette citation ?');">
                        <i class="bi bi-trash-fill"></i> Supprimer</a>
                </td>

            </tr>
        <?php endforeach ?>
        <!--<th scope="row">1</th>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
-->

    </tbody>
</table>
<?php

$content = ob_get_clean();


require_once ROOT . '/view/layout.view.php';
