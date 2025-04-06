<?php
require_once("../config/database.php");
session_start();
if(!isset($_SESSION["user"])){
    echo "Unauthorized access. Please check your steps!<br>Warning! Do not try hacking the system! ";
    exit();
}
$uid=$_SESSION["user"];
$old=md5($_POST["oldpass"]);
$new=md5($_POST["newpass"]);

$com1="select * from user_student where sid='$uid' and pwd='$old'";
$com2="update user_student set pwd='$new' where sid='$uid'";

$result1=mysqli_query($db,$com1);


if($result1->num_rows>0){ //user exists
    $result2=mysqli_query($db,$com2);
    if($result2){
        echo '<h4 style="margin:30px;">Notice: Password updated successfully.</h4>';
    }
    else{
    echo '<h4 style="margin:30px;">Attention: Password updated unsuccessfully.</h4>';
    }
}
else{
    echo '<h4 style="margin:30px;">Attention: Password updated unsuccessfully. Please check your input.</h4>';
}
mysqli_close($db);
?>

