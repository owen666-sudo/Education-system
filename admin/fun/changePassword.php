<?php
require_once("../../config/database.php");
session_start();

$uid=$_SESSION["admin"];
$old=md5($_POST["oldpass"]);
$new=md5($_POST["newpass"]);

$com1="select * from user_admin where adminID='$uid' and pwd='$old'";
$com2="update user_admin set pwd='$new' where adminID='$uid'";

$result1=mysqli_query($db,$com1);


if($result1->num_rows>0){ //user exists
    $result2=mysqli_query($db,$com2);
    if($result2){
        echo '<h4 style="margin:30px;">Tips：Password changed successfully</h4>';
    }
    else{
    echo '<h4 style="margin:30px;">Attention: Data updated failed.</h4>';
    }
}
else{
    echo '<h4 style="margin:30px;">Attention: Invaild input.</h4>';
}
mysqli_close($db);
?>

