<?php

require_once ROOT . '/model/users.model.php';
$user = getUserById($pdo, $_GET['id']);
if (!isset($_GET['id'])) {
    throw new Exception('id inexistant', 125);
}

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_GET['id'])) {
    //test affichage uniquement sur la liste utilisateur (flash_msg) 

    $_SESSION['flash_msg'] = updateUser($pdo, [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'mail' => $_POST['mail'],
        'token' => NULL
    ], $_GET['id']);

    header('location: index.php?controller=users');
}

require_once ROOT . '/view/template/users/update.view.php';
