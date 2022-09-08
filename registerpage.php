<html>
    <head>
        <title> registration form </title>
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

        #register-form {
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
        <div class="container">
            <h3 id="form-header"> Register </h3>
            <form id="register-form" action="" method="POST">

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

