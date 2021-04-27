<?php


include("connect.php");

if (isset($_GET['del'])) {
    $course_name = $_GET['del'];

    mysqli_query($conn, "DELETE FROM courses_data WHERE course_name = '$course_name'");
    echo header("Location: viewcourses.php");
    
}
?>

