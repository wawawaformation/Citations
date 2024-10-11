<?php

require ROOT . '/model/users.model.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'home';
        case 'updateProfile';
            $action = $_GET['action'];
            break;
        default:
            header('Location: index.php?controller=404');
    }
} else {
    $action = 'home';
}

require_once __DIR__ . '/' . $action . '.controller.php';