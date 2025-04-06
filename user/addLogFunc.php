<?php
    require_once("../config/database.php");
    session_start();
    $sid=$_SESSION['user'];
    $com="insert into student_log ( sid,reason,detail,addtime ) values(".$sid.",'".$_POST["reason"]."','".$_POST["detail"]."','". date('Y-m-d H:i:s')."' )" ;

    $result=mysqli_query($db,$com);
    if($result){
        echo "Assignment upload successfully。";
    }
    else{
        echo "Assignment upload unsuccessfully。";
    }

    mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">return</a></div> </div>