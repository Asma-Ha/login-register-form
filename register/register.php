<?php

    require_once "../pdo.php";
    session_start();


    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        //check in db if username & email are used 
        $sql1 = "SELECT * FROM info WHERE email = :email OR name = :name";
        $stmt1 = $pdo->prepare($sql1);
        $stmt1->execute(array(
            ':email' => $_POST['email'],
            ':name' => $_POST['username']));
            
        $row = $stmt1->fetch(PDO::FETCH_ASSOC);


        if ($row === FALSE){
            //if they dont exist in db : insert a new user
            $sql2 = "INSERT INTO info (name, email, password) VALUES (:name, :email, :password)";
            $stmt2 = $pdo->prepare($sql2);
            $stmt2->execute(array(
                ':name' => $_POST['username'],
                ':email' => $_POST['email'],
                ':password' => $_POST['password']
            ));

        
            //echo "<h5>Registered.</h5>", "\n";
            $_SESSION['loggedin'] = TRUE;
            header("Location: ../butterflypage.php");
            return;
        } 

        else {
            //if username or email are alreasy used : redirect to login page + flash error
            $_SESSION['exists'] = "Email or Username already exists, try logging in";
            header("Location: ../login/loginpage.php");
            return;

        }
    }
?>