<?php

    $dsn = 'mysql:host=localhost;dbname=mvc;charset=utf8';
    $user = 'root';
    $pass = '';

    
    try {
        $conn = new PDO($dsn, $user, $pass); //code...
    } catch (PDOException $e) {
        echo  'Une error de la connexion est survenue'; //throw $th;
    }
    
?>