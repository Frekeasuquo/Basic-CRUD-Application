<?php

session_start();

include 'connect.php';

if (isset($_GET['edit'])) {
    $course_id = $_GET['edit'];
    $u_id = 'u_id';

    $result = mysqli_query($conn, "SELECT * FROM courses_data WHERE course_name = '$course_id' AND u_id = '$u_id'");

    $object = mysqli_fetch_array($result);
    $course_id = $object['course_id'];
    $u_id = $object['u_id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Edit Course </h2>
    <form action="update.php" method="POST">
        <div class="foot">
            <div class="football">
                <div class="handball">
                    <input type="text" name="course_name" value="" placeholder="Course" required>
                    <br>
                    <br>
                    <input style="font-size: 15px;"   type="submit" name="update" value="Update">
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="a">
        <a href="viewcourses.php">View course list</a>
    </div>
</body>

</html>