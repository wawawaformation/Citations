<?php

require_once ROOT . '/model/authors.model.php';

$authors = getAuthors($pdo);


require ROOT . '/view/template/authors/all.view.php';