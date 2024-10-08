<?php

require ROOT . '/model/users.model.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'allUsers';
        case 'oneUser';
        case 'createUser';
        case 'updateUser';
        case 'deleteUser';
            $action = $_GET['action'];
            break;
        default:
            header('Location: index.php?controller=404');
    }
} else {
    $action = 'allUsers';
}

require_once __DIR__ . '/' . $action . '.controller.php';