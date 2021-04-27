<?php

session_start();

include("connect.php");

?>



<?php $results = mysqli_query($conn, "SELECT * FROM courses_data"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<table>
    <thead>
        <tr>
            <th><b>COURSE</b></th>
            <br>
            <th colspan="9"><b>ACTION</b></th>
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_assoc($results)) { ?>
        
        <tbody>
            <tr>
                <td><?php echo $row['course_name']; ?></td>
                <td>
                    <div class="edit_btn">
                        <a href="edit.php?edit=<?php echo $row['course_name']; ?>">Edit</a>
                    </div>
                </td>
                <td>
                    <div class="del_btn">
                        <a href="delete.php?del=<?php echo $row['course_name']; ?>">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    <?php } ?>
</table>
<br />
<div class="a">
    <a href="dashboard.php"> Go to Dashboard</a>
<div>