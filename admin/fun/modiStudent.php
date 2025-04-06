<?php

require_once("../../config/database.php");
if($_GET['sid']){
    $sid=$_GET['sid'];
}
$com='select * from student natural join (select did,dname from department) as didname where 1=1 and sid='.$sid ;


$result=mysqli_query($db,$com);
if($result){
    while($row=mysqli_fetch_object($result)){
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/fun.css">
    <title>Title</title>
</head>
<body>
<h3 class="subtitle">View Student >> Change Information</h3>
    <form action="editStudent.php" method="post">

        <div class="inputbox"><span>Student ID：</span><input name="sid" type="text" required value="<?php echo $row->sid ?>"></div>
        <div class="inputbox"><span>Student Name：</span><input name="name" type="text" required value="<?php echo $row->name ?>"></div>
        <div class="inputbox"><span>Sex：</span>
            <select name="sex" required>
                <option value="male" <?php  if($row->sex=='male') echo "selected"; ?>>male</option>
                <option value="female" <?php  if($row->sex=='female') echo "selected"; ?>>female</option>
            </select></div>
        <div class="inputbox"><span>Age：</span><input name="age" type="text" required value="<?php echo $row->age ?>"></div>
        <div class="inputbox"><span>Class：</span><input name="class" type="text" required value="<?php echo $row->class ?>"></div>
        <div class="inputbox"><span>Department：</span>
            <?php
            echo '<select required name="did">';
            $dept=mysqli_query($db,"select did,dname from department");
            while($dr=mysqli_fetch_object($dept)) {
                var_dump($dr);
            echo '<option value="'.$dr->did.'" '; if($dr->dname==$row->dname) echo 'selected'; echo '> '.$dr->dname.'</option>' ;
            }
            echo '</select>';
            ?></div>
            
        
        <div class="inputbox"><span>E-mail：</span><input name="email" type="text" value="<?php echo $row->email ?>"></div>
        <div class="inputbox"><span>Tele：</span><input name="tel" type="text"  value="<?php echo $row->tel ?>"></div>
        <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="edit"></div>
        <div class="redbox clickbox "><span></span><input name="back" type="button" onclick="javascript:history.back(-1);" value="return"></div>
    </form>

        <?php
    }
}
mysqli_close($db);
?>

