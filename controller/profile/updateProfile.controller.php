<?php

require_once ROOT . '/model/users.model.php';

if (!isset($_GET['id'])) {
    throw new Exception('id inexistant', 125);
}

$user = getUserById($pdo, $_GET['id']);

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_GET['id'])) {
    //test affichage uniquement sur la liste utilisateur (flash_msg) 

    $_SESSION['flash_msg'] = updateUser($pdo, [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'mail' => $_POST['mail'],
        'token' => NULL
    ], $_GET['id']);
}
if (isset($_POST['password'], $_POST['password_new'], $_POST['password_confirm'], $_GET['id'])) {
    require_once ROOT . '/model/users.model.php';
    $hash = getPassword($pdo, $_POST['mail']);
    if (password_verify($_POST['password'], $hash)) {
        $_SESSION['flash_msg'] = updatePassword($pdo, [
            'password' => $_POST['password'],
        ], $_GET['id']);

        header('location: index.php?controller=profile');
    }
}

//'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),

require_once ROOT . '/view/template/profile/update.view.php';
