<?php

session_start();

include 'connect.php';



if (isset($_POST['update'])) {
    $course_name = $_POST['course_id'];
    $old_course = $_POST['course_name'];
    $u_id = $_SESSION['id'];

    $updatecourse = "UPDATE `courses_data` SET  `course_name` = '$_POST[course_name]' WHERE `course_name` = '$_POST[old_course]' AND `u_id` = '$_SESSION[u_id]'";

    if (mysqli_query($conn, $updatecourse)) {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
        echo header("Location: viewcourses.php");
    } else {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
} else {
    echo "no";
}

?>

