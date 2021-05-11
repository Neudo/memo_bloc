<?php
setlocale(LC_ALL, "fr_FR"); 
session_start();
require_once('tools.php');


if(isset($_GET['page'])){

    $page = $_GET['page'];

    switch ($page) {

        case '404' : 
            require_once('controllers/404Controller.php');
            break;
        
        case 'bloc' :
            require_once('controllers/blocFormController.php');
            break;

        default : 
            header('Location:index.php?page=404');
            exit;
    }
}
else{
    $page = 'index';
    require_once('controllers/indexController.php');
}

require_once('layouts/layout.php');

if(isset($_SESSION['message'])) {  
    unset($_SESSION['message']);
}
?> 




