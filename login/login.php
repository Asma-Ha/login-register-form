<?php
    require_once "../pdo.php";
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $sql = "SELECT * FROM info WHERE email = :email AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':email' => $_POST['email'],
            ':password' => $_POST['password']));
            
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row === FALSE) {
            //if there are no records
            echo '<h5 style= "color : red;">Login incorrect.</h5>', "\n";
        }
        else 
        {
            echo "<h5>Logged in.</h5>", "\n";
        }
    }
?>