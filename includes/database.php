<?php

    define('HOST','localhost');
    define('DB_NAME','projetweb');
    define('USER','root');
    define('PASS','');
    
    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIOM);
        
    } catch (Exception $ex){
        echo $e;

    }