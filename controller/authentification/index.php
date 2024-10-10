<?php 
/**
 * Controller d'authentification
 * @author david LEGRAND <wawawaformation@gmail.com>
 * 
 * Permet de créer une varaible de session depuis un formulaire de connexion
 */

if(isset($_GET['action']) && $_GET['action'] === 'deconnexion'){
    unset($_SESSION['profile']);
    header('Location: index.php');
}

if(isset($_POST['mail'], $_POST['password'])){
    if(!empty($_POST['mail']) && !empty($_POST['password'])){
        require_once ROOT . '/model/users.model.php';
        $hash = getPassword($pdo, $_POST['mail']);
        if(password_verify($_POST['password'], $hash)){
            //on crée la variable de session profile
            $_SESSION['profile'] = getProfile($pdo, $_POST['mail']);
            header('Location: index.php');
        }else{
            $_SESSION['msg'] = [
                'code' => 'warning',
                'text' => 'Les identifiants ne correspondent pas !'
            ];
        }
    }else{
        $_SESSION['msg'] = [
            'code' => 'warning',
            'text' => 'Merci de compléter tous les champs'
        ];
    }
}


require_once ROOT . '/view/template/authentification/connexion.view.php';
