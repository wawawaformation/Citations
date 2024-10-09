<?php

if (isset($_POST['author'], $_POST['birthday'], $_POST['deathday'], $_POST['biography'], $_FILES['src'])) {

    if(!$_FILES['src']['error']){
        move_uploaded_file($_FILES['src']['tmp_name'],  ROOT . '/public/images/authors/' . $_FILES['src']['name']);
        $src = 'images/authors/' . $_FILES['src']['name'];
    }else{
        $src = null;
    }
    $author = strip_tags($_POST['author']);
    $birthday = $_POST['birthday'];
    $deathday = (empty($_POST['deathday'])) ? null : $_POST['deathday'];
    $biography = (empty($_POST['biography'])) ? null : $_POST['biography'];
   
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
