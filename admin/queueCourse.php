<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
</head>
<body>
    <div class="subtitle">
        <h3>View Course</h3>
    </div>
    <form action="./fun/getCourse.php" method="get" target="resultbox">
        
        <div class="inputbox"><span>Course ID：</span><input name="cid"  type="text"></div>
        <div class="inputbox"><span>Course Name：</span><input name="cname"  type="text"></div>
        <div class="inputbox"><span>Credit：</span><input name="credit"  type="text"></div>
        <div class="inputbox"><span>Address：</span><input name="caddr"  type="text"></div>
        <div class="inputbox"><span>Department：</span><input name="dname"  type="text"></div>
        <div class="inputbox"><span>Lecturer：</span><input name="tname"  type="text"></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
        
    </form>
    <iframe name="resultbox" frameborder="0" width="100%" height=550px ></iframe>
</body>
</html>