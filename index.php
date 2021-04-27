<?php include 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <h2>Registration Page</h2>
    <p>Required fields are in (*)</p>
    <form action="form.php" method="POST">
        <div class="foot">
            <div class="football">
                <div class="handball">
                    <label>First Name:* </label>
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" value="" required>
                    <br>
                    <br>
                    <label>Last Name:* </label>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="" required>
                    <br>
                    <br>

                    <label>Email:* </label>
                    <input type="email" name="email" id="email" placeholder="Email" value="" required>
                    <br>
                    <br>

                    <label>Username:* </label>
                    <input type="text" name="username" id="username" placeholder="Username" value="" required>
                    <br>
                    <br>

                    <label>Password:* </label>
                    <input type="password" name="password" id="password" placeholder="Password" value="" required>
                    <br>
                    <br>

                    <label>course:* </label>
                    <input  type="text" name="course" id="course" placeholder="Course" value="" required>
                    <br>
                    <br>

                    <input style="font-size: 15px;" type="submit" name="submit" value="submit">
                </div>
            </div>
        </div>

    </form>
    <div class="a">
        <a href="login.php">Login here</a>
    </div>
</body>

</html>