<?php 
session_start();
if(!isset($_SESSION["user"])||!$_SESSION["login"]==true){
        header ("HTTP/1.1 302 Moved Temporatily"); 
        header ("Location: "."../"); 
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Student</title>
</head>
<body>
<div class="container topnav">
    <div class="logo">
        Student Page
    </div>
    <div class="userbox" style="float:right">
        Student ID：<?php echo $_SESSION["user"]?>  <a href="../logout.php" style="display: inline-block; background-color: red; color: inherit; padding: 1px 2px; text-decoration: none; border: 1px solid black; border-radius: 0;"
   onmouseover="this.style.color='darkred'" onmouseout="this.style.color='inherit'">logout</a>

    </div>

</div>
<div class="container main">
    <div class="leftnav">
        <div class="homepage">
            <a href="./welcome.php" target="frame">Homepage</a>
        </div>
        <div class="subtitle">
            Presonal Information
        </div>
        <div class="item">
            <a href="./myInfo.php" target="frame">Personal Detail</a>
        </div>
        <div class="item">
            <a href="./editInfo.php" target="frame">Change Detail</a>
        </div>
        <div class="subtitle">
            Course Management
        </div>
        <div class="item">
            <a href="./queueClass.php" target="frame">View Course</a>
        </div>
        <div class="item">
            <a href="./myClass.php" target="frame">Course Management</a>
        </div>
        <div class="subtitle">
            Grade Management
        </div>
        <div class="item">
            <a href="./myScore.php" target="frame">Grade</a>
        </div>
        <div class="item">
            <a href="./myRetake.php" target="frame">Retake Manegement</a>
        </div>
        <div class="subtitle">
            Assigment Management
        </div>
        <div class="item">
            <a href="./myLog.php" target="frame">View Assignment</a>
        </div>
        <div class="item">
            <a href="./addLog.php" target="frame">Upload Assignment</a>
        </div>
        <div class="subtitle">
            Setting
        </div>
        <div class="item">
            <a href="./editPass.php" target="frame">Change Password</a>
        </div>



    </div>
    <div class="content">
        <iframe name="frame" frameborder="0" width="100%" src="./welcome.php"></iframe>
    </div>

</div>
<div class="container footer">
    <span>FireFox 0.1  @2025</span>
</div>
</body>
</html>