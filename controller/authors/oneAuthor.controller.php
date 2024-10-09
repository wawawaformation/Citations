<?php

if (!isset($_GET['id'])){
    throw new Exception('cet id n\'existe pas', 125);
}
$author = getOneAuthor($pdo, $_GET['id']);

require ROOT . '/view/template/authors/one.view.php';