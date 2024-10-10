<?php

require_once ROOT . '/model/users.model.php';

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_POST['password'])) {

    // modif interpretation
    if (
        createUser($pdo, [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'mail' => $_POST['mail'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ])
    ) {
        $_SESSION['flash_msg'] = [
            'code' => 'success',
            'text' => 'L\'utilisateur a bien été ajouté.'
        ];
    } else {
        $_SESSION['flash_msg'] = [
            'code' => 'danger',
            'text' => 'L\'utilisateur n\'a pas été ajouté.'
        ];
    }

    header('location: index.php?controller=users');
}


require_once ROOT . '/view/template/users/create.view.php';


