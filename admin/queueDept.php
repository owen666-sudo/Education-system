<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Department Information</title>
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
</head>
<body>
    <h3 class="subtitle">Department Management >> Department List</h3>
<table>
    <tr>
        <th>Department ID</th>
        <th>Department Name</th>
        <th>Address</th>
        <th>Lecturer</th>
        <th>Tele</th>
        <th>Edit</th>
    </tr>
    <?php
    require_once("../config/database.php");
    $com='select * from department order by did' ;
    
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                
                <td><?php echo $row->did ?></td>
                <td><?php echo $row->dname ?></td>
                <td><?php echo $row->dadd ?></td>
                <td><?php echo $row->dmng ?></td>
                <td><?php echo $row->dtel ?></td>
                <td><a href="./fun/modiDept.php?did=<?php echo $row->did; ?>">edit</a></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>
</html>