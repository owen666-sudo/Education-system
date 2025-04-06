<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
    <title>Course Management >> Add course</title>
</head>
<body>
<h3 class="subtitle">Course Management >> Add course</h3>
<form action="./fun/addCourse.php" method="post" target="resultbox">
    <div class="inputbox"><span>Course ID：</span><input name="cid" required type="text"></div>
    <div class="inputbox"><span>Course Name：</span><input name="cname" required type="text"></div>
    <div class="inputbox"><span>Credit：</span><input name="credit" required type="text"></div>
    <div class="inputbox"><span>Adress：</span><input name="cadd" required type="text"></div>
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
    <div class="inputbox"><span>Lecturer Name：</span><input name="tname" required type="text"></div>

    <br>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="submit"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
</form>

    <iframe name="resultbox" frameborder="0" width="100%" height=100px ></iframe>


</body>
</html>