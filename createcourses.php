<?php 

    session_start();
    include ('connect.php');
    
    if (isset($_POST['add'])) {
        $course_name = $_POST['course'];
        $id = $_SESSION['id'];

        echo $id;

        $sql = "INSERT INTO courses_data (u_id, course_name) VALUES ('$id', '$course_name')";

        if (mysqli_query($conn, $sql)) {
            echo header("Location: viewcourses.php");
            //echo "Record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

