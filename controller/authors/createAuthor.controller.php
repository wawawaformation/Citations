<?php

if (isset($_POST['author'], $_POST['birthday'], $_POST['deathday'], $_POST['biography'])) {
    if (createAuthor($pdo, [
        'author' => $_POST['author'],
        'biography' => (empty($_POST['biography']))? NULL : $_POST['biography'],
        'birthday' => $_POST['birthday'],
        'deathday' => (empty($_POST['deathday']))? NULL : $_POST['deathday']
    ])) {
        header('Location: index.php?controller=authors');
    }
}

require_once ROOT . '/view/template/authors/create.view.php';
