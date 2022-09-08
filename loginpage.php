<html>
    <head>
        <title> login form </title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;800&display=swap');
        body {
            font-family: 'Cairo', sans-serif;
        }
        input {
            border: none;
        }
        #form-header {
            text-align : center;
            font-size : 30px;
            margin : 10px;
        }

        #login-form {
            margin-top : 40px;
        }
        .container {
            margin :20px 25%;
            background-color : #B6D0E2;
            padding : 10px 30px;
            
        }
        #registration-container {
            text-align : center;
            margin-top : 4.9em;
        }

        .submit-button {
            float : right;
            margin : 10px 2px;
            padding : 3px 14px;
            background-color : #7fadcc;
            font-size : 12px;
            font-family: 'Cairo', sans-serif;
        }

        .text-zone {
            padding : 6px;
            float:right;
        }

    </style>
    <body>
        <?php
            $_POST = array();
        ?>
        <div class="container">
            <h3 id="form-header"> Login </h3>
            <form id="login-form" action="" method="POST">
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
                    <a href='registerpage.php'> Register </a>
                </p> 
                
            <div>
        </div>

        <?php
                require_once "login.php";
        ?>

    </body>
</html>

