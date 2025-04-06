<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>Student Management >> Add Student</title>
</head>
<body>
<h3 class="subtitle">Student Management >> Add Student</h3>
<form action="./fun/addStudent.php" method="post" target="resultbox">
    <div class="inputbox"><span>Student ID：</span><input name="sid" required type="text"></div>
    <div class="inputbox"><span>Name：</span><input name="name" required type="text"></div>
    <div class="inputbox"><span>Sex：</span>
        <select required name="sex">
            <option value="male">male</option>
            <option value="female">female</option>
        </select></div>
    <div class="inputbox"><span>Age：</span><input name="age" required type="text"></div>
    <div class="inputbox"><span>Class：</span><input name="class" required type="text"></div>
    <div class="inputbox"><span>Department：</span>
    <?php
    require_once '../config/database.php';
    echo '<select required name="did">';
    $dept=mysqli_query($db,"select did,dname from department");
    while($dr=mysqli_fetch_object($dept)) {
        var_dump($dr);
        echo '<option value="'.$dr->did.'" ';  echo '> '.$dr->dname.'</option>' ;
    }
    echo '</select>';
    mysqli_close($db);
    ?></div>
    
    <br>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
   
</form>

    <iframe name="resultbox" frameborder="0" width="100%" height=200px ></iframe>


</body>
</html>