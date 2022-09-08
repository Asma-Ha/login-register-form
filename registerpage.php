<html>
    <head>
        <title> registration form </title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <div class="container">
            <h3 id="form-header"> Register </h3>
            <form action="" method="POST">

                <label for="userame"> Username </label>
                <input class= "text-zone" type="text" id="username" name="username" value="" required>
                <br>

                <label for="email"> Email </label>
                <input class= "text-zone" type="text" id= "email" name="email" value="" required>
                <br>

                <label for="password"> password </label>
                <input class= "text-zone" type="password" id= "password" name="password" value="" required>
                <br>

                <input class = "submit-button" type="submit" name="submit" value="Submit">

            </form>
            <div id="registration-container">
                <p> Already registered ? 
                    <a href='loginpage.php'> Login </a>
                </p> 
                
            <div>
        </div>

        <?php
            require_once "register.php";
        ?>

    </body>
</html>

