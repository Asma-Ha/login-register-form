<?php
    require_once "../pdo.php";
    session_start();

    if (isset($_SESSION['incorrect'])) {
        echo '<h5 style= "color : red; text-align : center;">'.$_SESSION['incorrect'].'</h5>', "\n";
        unset($_SESSION['incorrect']);
    }

    if (isset($_SESSION['exists'])) {
        echo '<h5 style= "color : red; text-align : center;">'.$_SESSION['exists'].'</h5>', "\n";
        unset($_SESSION['exists']);
    }


    if (isset($_POST['email']) && isset($_POST['password'])) {
        //log out of the prev account 
        unset($_SESSION['loggedin']);

        //check login info in db
        $sql = "SELECT * FROM info WHERE email = :email AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':email' => $_POST['email'],
            ':password' => $_POST['password']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($row === FALSE) {
            //if there are no records
            //echo '<h5 style= "color : red;">Login incorrect.</h5>', "\n";
            $_SESSION['incorrect'] = "Login information incorrect";
            header("Location: loginpage.php");
            return;
        }
        else 
        {
            $_SESSION['loggedin'] = TRUE;
            header("Location: ../butterflypage.php");
            return;
            //echo "<h5>Logged in.</h5>", "\n";
        }
    }
?>