<?php
session_start();

include "connect.php";

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $object = "SELECT 'username', 'password' FROM users_data WHERE username = '$username' AND  password = ('$password')";

    $row = mysqli_query($conn, $object);

    if (mysqli_num_rows($row) > 0) {
        $row = mysqli_fetch_assoc($row);
        $id = $row["id"];
        header("Location: dashboard.php");
        echo "You're Logged in";
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;
    }

}else {
    echo "Invaild username or password";
}
?>