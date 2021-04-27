<?php
include 'connect.php';

if(isset($_POST['reset'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['newPassword'];


    $sql = "SELECT id FROM users_data WHERE username = '$username' AND password = '$password'";
    $object = mysqli_query($conn, $sql); 
    

    $row = mysqli_fetch_assoc($object);
    $id = $row["id"];


    $sql = "UPDATE users_data SET password = '$newPassword' WHERE username = '$username'";

    if ($conn->query($sql) === TRUE) {
        echo "Password Updated";
        echo "Login with new password </br>";
        echo "<a href=" . "login.php" . ">Login</a>";
    }else {
        echo "Error updating record: " . $conn->error;
    }
}



?>