<?php 
include("connect.php");

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $course = $_POST['course'];

    $sql = "INSERT INTO users_data (first_name, last_name, email, username, password, course) VALUES ('$first_name', '$last_name', '$email', '$username', '$password', '$course')";

    if (mysqli_query($conn, $sql)) {
        echo "Data created </br> ";
        echo "<a href=" . "login.php" . ">Login</a>";
    }else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}

else {
    echo "";
}



?>