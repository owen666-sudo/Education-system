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
    <h3>Grade Management</h3>
<table>
    <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Credit</th>
        <th>Lecturer name</th>
        <th>Grade</th>
        <th>Info</th>
    </tr>
    <?php

    $com="select * from course natural join (select cid,score from student_course where score is not null and sid='$sid') as chosen  " ;
    
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $row->cid ?></td>
                <td><?php echo $row->cname ?></td>
                <td><?php echo $row->credit ?></td>
                <td><?php echo $row->tname ?></td>
                <td><?php echo $row->score ?></td>
                <td><?php if($row->status==1)echo "Retake" ?></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>
</html>