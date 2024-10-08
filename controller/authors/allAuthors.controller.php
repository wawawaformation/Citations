<?php

require_once ROOT . '/model/authors.model.php';

$authors = getAuthors($pdo);
var_dump($authors);
