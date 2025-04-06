<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./user.css">
</head>
<body>
    <div class="subtitle">
        <h3>Course Query</h3>
    </div>
    <form action="./getClass.php" method="get" target="resultbox">
        
        <div class="inputbox"style="position: relative; top: 0px;left: 0px;"><span>Course ID：</span> <br><input name="cid"  type="text"></div>
        <div class="inputbox"><span>Course Name：</span><input name="cname"  type="text"></div>
        <div class="inputbox"><span>Credit：</span><br><input name="credit"  type="text"></div>
        <div class="inputbox"><span>Course Address：</span><input name="caddr"  type="text"></div>
        <div class="inputbox"><span>Department Name：</span><input name="dname"  type="text"></div>
        <div class="inputbox"><span>Lecturer Name：</span><input name="tname"  type="text"></div>
        <div class="clickbox"><input name="submit" type="submit" value="submit"></div>
        
    </form>
    <iframe name="resultbox" frameborder="0" width="100%" height=400px ></iframe>
</body>
</html>