<?php

function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=memo_blocs;charset=utf8mb4', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    }
    catch (Exception $exception) 
    {
        die( 'Erreur : ' . $exception->getMessage() );
    }
    return $db;
}

?>