<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lance Log-in</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <img src="logo_vector.png" alt="Logo" class="center">
    <div class="container">
        <form method="POST" action="login_controller.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Login">
            <div class="sign-up">
                <a href="register.html"> I don't have an account</a>
            </div>
            <div class="find-pw">
                <a href="#"> I forgot my password</a>
            </div>
        </form>
        <?php
        if (isset($_GET['error'])) {
            $msg = $_GET['error'];
            echo "<script>alert('$msg');</script>";
        }
        ?>
    </div>
</body>

</html>