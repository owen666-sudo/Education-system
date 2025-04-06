<?php

require_once("../../config/database.php");

$com="select * from student_log where sid=".$_GET['sid']." and addtime='". $_GET['addtime']."'";

$result=mysqli_query($db,$com);
if($result){
    while($row=mysqli_fetch_object($result)){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/fun.css">
    <title>Title</title>
</head>
<body>
<h3 class="subtitle">Assignment Management >> Change Information</h3>
    <form action="editLog.php" method="post" id="log">
    
    <span>Student ID：</span><input name="sid" required type="text" style="width:180px" value="<?php echo $row->sid ?>"><br>
    
    <br>
    <input name="addtime"required  type="text" style="display:none;" value="<?php echo $row->addtime ?>">
    <span>Course：</span><input name="reason"required  type="text" class="boxwidth" value="<?php echo $row->reason ?>">
    <br>
    <span>Assignment：</span><br><textarea style="display:block;width:90%;height:60px;"name="detail" required form="log" ><?php echo $row->detail ?></textarea><br>
   

        <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
        <div class="redbox clickbox "><span></span><input name="back" type="button" onclick="javascript:history.back(-1);" value="return"></div>
    </form>

        <?php
    }
}
mysqli_close($db);
?>

