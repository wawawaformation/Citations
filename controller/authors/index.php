<?php

require_once ROOT . '/model/authors.model.php';

if (isset($_GET['action'])) {

    switch ($_GET['action']) {
        case 'allAuthors':
        case 'oneAuthor':
        case 'createAuthor':
        case 'updateAuthor':
        case 'deleteAuthor':
            $action = $_GET['action'];
            break;
        default:
            header('Location: index.php?controller=404');
    }
} else {

    $action = 'allAuthors';
}
require_once ROOT . '/controller/authors/' . $action . '.controller.php';
