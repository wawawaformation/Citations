<?php

if(!isset($_GET['id'])){
    $_SESSION['msg'] = [
        'code'=> 'warning',
        'text'=> 'L\'auteur est untrouvable.'
    ];
    header('Location: index.php?controller=authors');
}

/*
echo '<pre>';
print_r($_POST);
print_r($_GET['id']);
echo '</pre>';
die();
*/

if (isset($_POST['author'], $_POST['birthday'], $_POST['deathday'], $_POST['biography'], $_FILES['src'])) {

   if(updateAuthor($pdo, [
        'author'=> $_POST['author'],
        'birthday'=> $_POST['birthday'],
        'deathday'=> $_POST['deathday'],
        'biography'=> $_POST['biography'],
        'src'=> $_FILES['src']
    ], 
    $_GET['id'])){

    };
    header('Location: index.php?controller=authors');
}


$author = getOneAuthor($pdo, $_GET['id']);

require_once ROOT . '/view/template/authors/update.view.php';