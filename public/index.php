<?php

session_start();
define('ROOT', dirname(__DIR__));

if(isset($_GET['controller'])){
    switch($_GET['controller']){
        case 'quotes':
        case 'users':
        case 'authors' :
        case 'profile' :
        case 'authentification' :
            $controller = $_GET['controller'];
            break;
        default:
            $controller = '404';
    }

}else{
    $controller = 'quotes';
}


if(!isset($_SESSION['profile'])){
    $controller = 'authentification';
}


require_once ROOT . '/controller/' . $controller . '/index.php';