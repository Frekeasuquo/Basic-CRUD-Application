<?php

session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>This is your dashboard <?php echo $_SESSION['username'] ?> </h2>
    <form action="createcourses.php" method="POST">
        <div class="foot">
            <div class="football">
                <div class="handball">
                    <p><b>ADD COURSE</b></p>
                    <input type="text" name="course" value="" placeholder="Course name" required>
                    <br>
                    <br>
                    <input style="font-size: 20px;" type="submit" name="add" value="Add">
                </div>
            </div>
        </div>

    </form>
    <br>
    <div class="a">
        <a href="viewcourses.php">View added courses</a>
    </div>
</body>

</html>