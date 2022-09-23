<?php
    session_start();
    if (!isset($_SESSION['loggedin']))
   {
        header("Location: ./login/loginpage.php");
        return;
   } 
   
?>

<html>
    <head>
        <title>Butterfly page</title>
    </head>

    <body>
        <h1>Welcome</h1>
    </body>
</html>