<?php

if(!isset($_GET['id'])){
    $_SESSION['msg'] = [
        'code'=> 'warning',
        'text'=> 'L\'auteur est introuvable.'
    ];
    header('Location: index.php?controller=authors');
}


if(isset($_POST['author'], $_POST['biography'], $_POST['birthday'], $_POST['deathday'], $_POST['garder_img'])){
    $src = getOneAuthor($pdo, $_GET['id'])['src'];
    if($_POST['garder_img'] == 'non'){
        $path = ROOT . '/public/' . $src;
        unlink($path);
        $src = null;
    }

    if(isset($_FILES['src']) && !$_FILES['src']['error']){
        $path = ROOT . '/public/' . $src;
        unlink($path);
       
        $tmp = $_FILES['src']['tmp_name'];

        $src = 'images/authors/' . $_FILES['src']['name'];
        $path = ROOT . '/public/' .$src;
        move_uploaded_file($tmp, $path);
    }
    updateAuthor($pdo, [
        'author'=>$_POST['author'],
        'biography'=>$_POST['biography'],
        'birthday' =>$_POST['birthday'],
        'deathday' => $_POST['deathday'],
        'src' => $src
    ], $_GET['id']);
    $_SESSION['msg'] = [
        'code'=> 'success',
        'text'=> 'L\'auteur a bien été modifié'
    ];
    header('Location: index.php?controller=authors');
}




$author = getOneAuthor($pdo, $_GET['id']);

require_once ROOT . '/view/template/authors/update.view.php';