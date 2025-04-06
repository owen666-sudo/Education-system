<?php
session_start();
$sid=$_SESSION["user"];
require_once("../config/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./user.css">
</head>
<body>
    <h3>Course Management</h3>
<table>
    <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Credit</th>
        <th>Adress</th>
        <th>Lecturer Name</th>
        <th>Edit</th>
    </tr>
    <?php

    $com="select * from course natural join (select cid from student_course where score is null and sid='$sid') as chosen" ;
    
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $row->cid ?></td>
                <td><?php echo $row->cname ?></td>
                <td><?php echo $row->credit ?></td>
                <td><?php echo $row->cadd ?></td>
                <td><?php echo $row->tname ?></td>
                <td><a href="delCourse.php?cid=<?php echo $row->cid."&sid=".$row->sid; ?>">drop</a></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>
</html>