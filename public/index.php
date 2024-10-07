<?php

define('ROOT', dirname(__DIR__));

if(isset($_GET['controller'])){
    switch($_GET['controller']){
        case 'quotes':
        case 'users':
        case 'authors':
            $controller = $_GET['controller'];
            break;
        default:
        $controller = '404';
    
    }
  
}else{
    $controller = 'quotes';
    
}

require_once ROOT. '/controller/' . $controller . '/index.php';