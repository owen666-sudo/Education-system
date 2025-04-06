<?php 
session_start();
if(!isset($_SESSION["admin"])||!$_SESSION["login"]==true){
        header ("HTTP/1.1 302 Moved Temporatily"); 
        header ("Location: "."../"); 
        exit();
    }
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Lecturer</title>
</head>
<body>
<div class="container topnav">
    <div class="logo">
        Lecturer Page
    </div>
    <div class="userbox" style="float:right">
        Welcome, Lecturer <?php echo $_SESSION["admin"]?> <a href="../logout.php" style="display: inline-block; background-color: red; color: inherit; padding: 1px 2px; text-decoration: none; border: 1px solid black; border-radius: 0;"
   onmouseover="this.style.color='darkred'" onmouseout="this.style.color='inherit'">logout</a>
    </div>

</div>
<div class="container main">
    <div class="leftnav">
        <div class="homepage">
            <a href="./welcome.php" target="frame">Homepage</a>
        </div>
        <div class="subtitle">
            Account Management
        </div>
        <div class="item">
            <a href="./addStudent.php" target="frame">Add Account</a>
        </div>
        <div class="item">
            <a href="./queueStudent.php" target="frame">View Account</a>
        </div>
        <div class="item">
            <a href="./getLog.php" target="frame">Assignment Management</a>
        </div>
        <div class="subtitle">
            Department Management
        </div>
        <div class="item">
            <a href="./queueDept.php" target="frame">Department Informantion</a>
        </div>
        <div class="item">
            <a href="./queueMajor.php" target="frame">Major List</a>
        </div>
        <div class="subtitle">
            Course Management
        </div>
        <div class="item">
            <a href="./queueCourse.php" target="frame">View Course</a>
        </div>
        <div class="item">
            <a href="./addCourse.php" target="frame">Add Course</a>
        </div>
        <div class="subtitle">
            Student Management
        </div>
        <div class="item">
            <a href="./queueChoose.php" target="frame">Student Selecting</a>
        </div>
        <div class="item">
            <a href="./queueMark.php" target="frame">Grade Score</a>
        </div>
        <div class="item">
            <a href="./queueRetake.php" target="frame">Course Retake</a>
        </div>
        <div class="subtitle">
           Record
        </div>
        <div class="item">
            <a href="./scoreStatistic.php" target="frame">Grade Record</a>
        </div>
        <div class="item">
            <a href="./classStatistic.php" target="frame">Course Record</a>
        </div>
        <div class="subtitle">
            Setting
        </div>
        <div class="item">
            <a href="./userManage.php" target="frame">Account Management</a>
        </div>
        <div class="item">
            <a href="./changePassword.php" target="frame">Change Password</a>
        </div>


    </div>
    <div class="content">
        <iframe name="frame" frameborder="0" width="100%"  scrolling="yes"  src="./welcome.php"></iframe>
    </div>

</div>
<div class="container footer">
    <span>FireFox 0.1  @2025</span>
</div>
</body>
</html>