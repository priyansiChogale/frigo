<?php session_start(); ?>

<html>
<head>
    <title>Login & Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="loginBody">

    <div class="container">
        <?php
            if(isset($_SESSION['status'])){ 
                echo $_SESSION['status'];
                unset($_SESSION['status']);
            }
        ?>
    </div>

    <div class="container">
    <div class="form-container">
        <div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Register</span>
            <hr id="indicator">
        </div>

        <form action="validation.php" method="POST" id="LoginForm">
        <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" name="pwd" class="form-control" required>
        </div>
        
        <button type="submit" class="btn">Login</button>
        </form>

        <form action="registration.php" method="POST" id="RegForm">
        <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" autocomplete=off required>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" name="pwd" class="form-control" required>
        </div>
        <button type="submit" class="btn">Register</button>
        <small>Already have an account ? <small class="nestedSmall" onclick="login()">Login</small></small>
    </div>
        </form>
    </div>
    </div>

    <!--JS for form-->
        <script>
            var loginForm = document.getElementById("LoginForm");
            var regForm = document.getElementById("RegForm");
            var indicator = document.getElementById("indicator");

            function login(){
                regForm.style.transform = "translateX(700px)";
                loginForm.style.transform = "translateX(700px)";
                indicator.style.transform = "translateX(0px)";
            }
            
            function register(){
                regForm.style.transform = "translateX(0px)";
                loginForm.style.transform = "translateX(0px)";
                indicator.style.transform = "translateX(300px)";
            }


        </script>
</body>
</html>