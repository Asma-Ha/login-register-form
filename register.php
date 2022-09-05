<html>
    <head>
        <title> registration form </title>
    </head>
    <body>
        <pre> <!-- preformatted text -->
            <?php
                echo "hello";
            ?>
        </pre>

        <h3> register </h3>

        <form action="" method="POST">
            <label for="userName"> user name </label>
            <input type="text" id="userName" name="userName" value="">
            <br>

            <label for="email"> Email </label>
            <input type="text" id= "email" name="email" value="">
            <br>

            <label for="password"> password </label>
            <input type="password" id= "password" name="password" value="">
            <br>

            <input style = "margin : 20px 165px;" type="submit" name="submit" value="Submit">
        </form>

        <p> Already registered ?  </p> 
        <a href='login.php'> Login </a>

    </body>
</html>

