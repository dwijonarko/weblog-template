<?php 
    $host      = '127.0.0.1:3306';
    $user      = 'root';
    $pass      = 'root';
    $dbname    = 'web_2015';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
    );
    try{
        $database = new PDO($dsn, $user, $pass, $options);
    }
    catch(PDOException $e){
        die ("<div class='alert alert-danger'>".$e->getMessage())."</div>";    
    }
    