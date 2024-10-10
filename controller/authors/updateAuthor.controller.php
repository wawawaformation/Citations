<?php

if(!isset($_GET['id'])){
    $_SESSION['msg'] = [
        'code'=> 'warning',
        'text'=> 'L\'auteur est introuvable.'
    ];
    header('Location: index.php?controller=authors');
}


<<<<<<< HEAD
if(isset($_POST['author'], $_POST['biography'], $_POST['birthday'], $_POST['deathday'], $_POST['garder_img'])){
=======
if(isset($_POST['author'], $_POST['birthday'], $_POST['deathday'], $_POST['biography'], $_POST['garder_img'])){
>>>>>>> e4bacbbc7979749e49f3ea312fa364e4c139977f
    $src = getOneAuthor($pdo, $_GET['id'])['src'];
    if($_POST['garder_img'] == 'non'){
        $path = ROOT . '/public/' . $src;
        unlink($path);
        $src = null;
    }

<<<<<<< HEAD
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
=======



    if($_FILES['src'] && $_FILES['src']['error']==0){
        $path = ROOT . '/public/' . $src;
        unlink($path);

        $from = $_FILES['src']['tmp_name'];
        $to = ROOT . '/public/images/authors/' . $_FILES['src']['name'];
        $src = 'images/authors/' . $_FILES['src']['name'];
        move_uploaded_file($from, $to);
    }
    updateAuthor($pdo, [
        'author'=>$_POST['author'],
        'birthday'=>$_POST['birthday'],
        'deathday'=>$_POST['deathday'],
        'biography'=>$_POST['biography'],
        'src'=>$src
    ], $_GET['id']);
    $_SESSION['msg'] = [
        'code'=> 'succes',
        'text'=> 'L\'image a été modifiée'
>>>>>>> e4bacbbc7979749e49f3ea312fa364e4c139977f
    ];
    header('Location: index.php?controller=authors');
}



<<<<<<< HEAD

=======
>>>>>>> e4bacbbc7979749e49f3ea312fa364e4c139977f
$author = getOneAuthor($pdo, $_GET['id']);

require_once ROOT . '/view/template/authors/update.view.php';