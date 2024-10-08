<?php

require_once ROOT . '/model/authors.model.php';

if (!isset($_GET['id'])) {

    throw new Exception('id existe pas', 125);
}

$author = getOneAuthor($pdo, $_GET['id']);


var_dump($author);
