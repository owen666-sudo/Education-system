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
    <h3>View Assignment</h3>
<table>
    <tr>
        <th>Course Name</th>
        
        <th>Detail</th>
        
        <th>Submit Date</th>
        <th></th>
        <th>Edit</th>
    </tr>
    <?php

    $com="select * from student_log left join (select sid sid2,name from student) as sname on student_log.sid=sname.sid2 where sid='$sid' " ;
    
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                
                <td><?php echo $row->reason ?></td>
                <td><?php echo $row->detail ?></td>
               
                <td><?php echo $row->addtime ?></td>
                <td><a href="modiLog.php?sid=<?php echo $row->sid."&addtime=".$row->addtime; ?>">edit</a></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>
</html>