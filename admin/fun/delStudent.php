<?php

require_once("../../config/database.php");
if($_GET['sid']){
    $sid=$_GET['sid'];
}
$com='delete from student where sid='.$sid ;
$com2="delete from user_student where sid='$sid'";

$result=mysqli_query($db,$com);
$result2=mysqli_query($db,$com2);
if($result&&$result2){
    echo '<h4 style="margin:30px;">Tips: Account has been removed.</h4>';
}
else{
    echo '<h4 style="margin:30px;">Attention: Data updated failed.</h4>';
}
    mysqli_close($db);
    ?>

<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">return</a></div> </div>