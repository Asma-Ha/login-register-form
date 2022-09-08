<?php
    //to set a connection with the database
    $pdo = new PDO('mysql:host=localhost;port=8889;dbname=users', 'admin', 'admin');
    //to show errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>