<?php
    require_once "pdo.php";
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        //check if username & email are used 
        $sql1 = "SELECT * FROM info WHERE email = :email OR name = :name";
        $stmt1 = $pdo->prepare($sql1);
        $stmt1->execute(array(
            ':email' => $_POST['email'],
            ':name' => $_POST['username']));
            
        $row = $stmt1->fetch(PDO::FETCH_ASSOC);
        if ($row === FALSE){
            //if not insert register
            $sql2 = "INSERT INTO info (name, email, password) VALUES (:name, :email, :password)";
            $stmt2 = $pdo->prepare($sql2);
            $stmt2->execute(array(
                ':name' => $_POST['username'],
                ':email' => $_POST['email'],
                ':password' => $_POST['password']
            ));
            echo "<h5>Registered.</h5>", "\n";
        } 
        else {
            echo '<h5 style= "color : red;">Email or Username already exists.</h5>', "\n";

        }
    }
?>