<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="resetpass.php" method="POST">
        <div class="foot">
            <div class="football">
                <div class="handball">
                    Username:* <input type="text" name="username" id="username" placeholder="Username" value="" required>
                    <br>
                    <br>
                    New Password:* <input type="password" name="newPassword" id="password" placeholder="New Password" value="" required>
                    <br>
                    <br>
                    <input style="font-size: 15px;" type="submit" name="reset" value="Reset">
                </div>
            </div>
        </div>

    </form>
</body>

</html>