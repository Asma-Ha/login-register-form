<html>
    <head>
        <title> login form </title>
        <link rel="stylesheet" type="text/css" href="../styles.css"/>
    </head>
    <body>
        <?php
            $_POST = array();
        ?>
        <div class="container">
            <h3 id="form-header"> Login </h3>
            <form action="" method="POST">
                <label for="email"> Email </label>
                <input class = "text-zone" type="text" id= "email" name="email" required>
                <br>

                <label for="password"> password </label>
                <input class = "text-zone" type="password" id= "password" name="password" required>
                <br>

                <input class = "submit-button" type="submit" name="submit" value="Submit">
            </form>

            <div id="registration-container">
                <p> Not registered yet ? 
                    <a href='../register/registerpage.php'> Register </a>
                </p> 
                
            <div>
        </div>

        <?php
                require_once "../login/login.php";
        ?>

    </body>
</html>

