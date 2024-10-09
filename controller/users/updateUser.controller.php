<?php

require_once ROOT . '/model/users.model.php';
$user = getUserById($pdo, $_GET['id']);
if (!isset($_GET['id'])) {
    throw new Exception('id inexistant', 125);
}

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_POST['password'], $_GET['id'])) {
    if (updateUser($pdo, [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'mail' => $_POST['mail'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'token' => NULL
    ], $_GET['id'])) {
        $_SESSION['msg'] = [
            'code' => 'success',
            'text' => 'L\'utilisateur a bien été modifié.'
        ];
    } else {
        $_SESSION['msg'] = [
            'code' => 'warning',
            'text' => 'L\'utilisateur n\'a pas pu être modifié.'
        ];
    };
    header('location: index.php?controller=users');
}

require_once ROOT . '/view/template/users/update.view.php';
