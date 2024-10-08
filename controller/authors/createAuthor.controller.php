<?php

$newAuthor = createAuthor($pdo, $data);

if (isset($_GET['author'])) {

    throw new Exception('l\'auteur éxiste déjà', 125);
}

$newAuthor = createAuthor($pdo, $_GET['author']);
