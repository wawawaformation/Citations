<?php

if (isset($_POST['author'], $_POST['birthday'], $_POST['deathday'], $_POST['biography'])) {
    $author = strip_tags($_POST['author']);
    $birthday = $_POST['birthday'];
    $deathday = (empty($_POST['deathday'])) ? null : $_POST['deathday'];
    $biography = (empty($_POST['biography'])) ? null : $_POST['biography'];
    $src = '';
    $data = [
        'author' => $author,
        'birthday' => $birthday,
        'deathday' => $deathday,
        'biography' => $biography,
        'src' => $src
    ];
   
 
  
    createAuthor($pdo,$data);
    header('Location: index.php?controller=authors');
    exit;
}

require_once ROOT . '/view/template/authors/create.view.php';
