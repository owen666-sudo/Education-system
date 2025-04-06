<!DOCTYPE html>
<html>
<head>
    <style>

        table th{
            
            font-size: 15px;
            padding: 6px;
            height: 38px;
       }
        table td{
            height: 25px;
            text-align: center;
            font-size: 13px;
            padding: 3px;
        }
    </style>
</head>

<body>
    
<table>
<tr>
    <th style="min-width: 6%;">Student ID</th>
    <th style="min-width: 5%;">Student Name</th>
    <th style="min-width: 3%;">Sex</th>
    <th style="min-width: 3%;">Age</th>
    <th style="min-width: 3%;">Class</th>
    <th style="min-width: 8%;">Department</th>
   
    <th style="min-width: 6%;">Edit</th>
</tr>
<?php
require_once("../../config/database.php");

$com='select * from student natural join (select did,dname from department) as didname where 1=1' ;
if($_POST['sid']){
    $com=$com.' and sid like "%'.$_POST['sid'].'%"';
}
if($_POST['name']){
    $com=$com.' and name like "%'.$_POST['name'].'%"';
}
if($_POST['sex']){
    $com=$com.' and sex="'.$_POST['sex'].'"';
}
if($_POST['age']){
    $com=$com.' and age='.$_POST['age'];
}
if($_POST['class']){
    $com=$com.' and class like "%'.$_POST['class'].'%"';
}
if($_POST['dname']){
    $com=$com.' and dname like "%'.$_POST['dname'].'%"';
}


$result=mysqli_query($db,$com);
if($result){
    while($row=mysqli_fetch_object($result)){
        ?>
        <tr>
            <td><?php echo $row->sid ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->sex ?></td>
            <td><?php echo $row->age ?></td>
            <td><?php echo $row->class ?></td>
            <td><?php echo $row->dname ?></td>
            <td><?php echo $row->idnum ?></td>
            <td><a href="modiStudent.php?sid=<?php echo $row->sid?>">edit</a> / <a href="delStudent.php?sid=<?php echo $row->sid?>">cancel</a></td>
        </tr>
        <?php
    }
}

mysqli_close($db);
?>
</table>
</body></html>
