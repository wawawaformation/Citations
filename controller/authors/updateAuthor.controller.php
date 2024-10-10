<?php

if (!isset($_GET['id'])) {
    $_SESSION['msg'] = [
        'code' => 'warning',
        'text' => 'L\'auteur est introuvable.'
    ];
    header('Location: index.php?controller=authors');
}


if (isset($_POST['author'], $_POST['birthday'], $_POST['deathday'], $_POST['biography'], $_POST['garder_img'])) {
    $src = getOneAuthor($pdo, $_GET['id'])['src'];
    if ($_POST['garder_img'] == 'non') {
        $path = ROOT . '/public/' . $src;
        unlink($path);
        $src = null;
    }




    if ($_FILES['src'] && $_FILES['src']['error'] == 0) {
        $path = ROOT . '/public/' . $src;
        unlink($path);

        $from = $_FILES['src']['tmp_name'];
        $to = ROOT . '/public/images/authors/' . $_FILES['src']['name'];
        $src = 'images/authors/' . $_FILES['src']['name'];
        move_uploaded_file($from, $to);
    }
    updateAuthor($pdo, [
        'author' => $_POST['author'],
        'birthday' => $_POST['birthday'],
        'deathday' => $_POST['deathday'],
        'biography' => $_POST['biography'],
        'src' => $src
    ], $_GET['id']);
    $_SESSION['msg'] = [
        'code' => 'succes',
        'text' => 'L\'image a été modifiée'
    ];
    header('Location: index.php?controller=authors');
}



$author = getOneAuthor($pdo, $_GET['id']);

require_once ROOT . '/view/template/authors/update.view.php';
