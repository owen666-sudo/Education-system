<?php
    require_once("../config/database.php");
    session_start();
    // 1.first time cid not exist add and set status 0 2.exist status 0 score is null refuse 3.exist 0 score is not null 1 exist score is not nu
    $sid=$_SESSION['user'];
    $cid=$_GET["cid"];
    $checkfirst="select * from student_course where cid='$cid' and sid='$sid' and status='0'";
    $checkretake="select * from student_course where cid='$cid' and sid='$sid' and status='1'";
    $checkretakenotfinish="select * from student_course where cid='$cid' and sid='$sid' and status='1' and score is null";
    $insertfirst="insert into student_course (sid,cid,status) values ('$sid','$cid','0')";
    $insertretake="insert into student_course (sid,cid,status) values ('$sid','$cid','1')";
    $deleteretake="delete from student_course where sid='$sid' and cid='$cid' and score is null and status='1'" ;

    $resultfirst=mysqli_query($db,$checkfirst);
    $resultretake=mysqli_query($db,$checkretake);
    
    $ok=false;

    echo "<h3>";
    if($resultretake->num_rows>0){ //Record
        echo("This course has retake record.");
        $checknotfinish=mysqli_query($db,$checkretakenotfinish);
        if($checknotfinish->num_rows>0){
             echo('，This course has retake record, exit.');
        }
        else{
            $delretake=mysqli_query($db,$deleteretake);
            $addretake=mysqli_query($db,$insertretake);
            if($addretake && $delretake){
            $ok=true;
            echo('，Cancel course has retake record,add new course.');
            }
        }
    }
    else if($resultfirst->num_rows>0){ //Record
        echo("Course has retake record");
        while($row=mysqli_fetch_object($resultfirst)){
            if($row->score==null){
                echo('，Untaken course, exit.');
            }
            else{
                $addretake=mysqli_query($db,$insertretake);
                if($addretake){
                $ok=true;
                echo('，Add retake recourd.');
                }
            }
        }
    }
    else{ //No recored
        echo("Course is first record，add new course.");
        $addfirst=mysqli_query($db,$insertfirst);
        if($addfirst){
            $ok=true;
        }
    }
    
    if($ok){
        echo "<br>Data update successfully.";
    }
    else{
        echo "<br>Data update unsuccessfully.";
    }

    mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">return</a></div> </div>