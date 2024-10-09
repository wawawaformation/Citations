<?php

updateAuthor($pdo,$data, $_GET['id']);

require_once ROOT . '/view/template/authors/update.view.php';