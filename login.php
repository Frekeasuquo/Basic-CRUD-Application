<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="slogin.php" method="POST">
        <h2>Login</h2>
        <div class="football">
            <div class="handball">
                Username:* <input type="text" name="username" id="username" placeholder="Username" value="" required>
                <br>
                <br>
                Password:* <input type="password" name="password" id="password" placeholder="Password" value="" required>
                <br>
                <br>
                <input style="font-size: 15px;" type="submit" name="login" value="Login">
            </div>
        </div>
    </form>
    <div class="a">
        <a href="reset.php">Reset password</a>
    </div>
</body>

</html>