<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
    <title>Account Management >> View Account</title>
</head>
<body>
<h3 class="subtitle">Course Management >> View Course Taken</h3>
<form action="./fun/getChoose.php" method="get" target="resultbox">
    <div class="inputbox"><span>Student ID：</span><input name="sid"  type="text"></div>
    <div class="inputbox"><span>Course Name：</span><input name="name"  type="text"></div>
    <div class="inputbox"><span>Course ID：</span><input name="cid"  type="text"></div>
    <div class="inputbox"><span>Course：</span><input name="cname"  type="text"></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
</form>
<iframe name="resultbox" frameborder="0" width="100%" height=600px ></iframe>
</body>
</html>