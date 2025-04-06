<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
    <title>Course Management>> Grade Record</title>
</head>
<body>

<div class="titlebox">
    <h3>Course Management>> Grade Record</h3>
    <p></p>
</div>

<div class="formbox">
    <form action="./fun/getMark.php" method="get" target="resultbox">
        <div class="input_mid">Student ID：<input name="sid"  type="text"></div>
        <div class="input_mid">Student Name:<input name="name"  type="text"></div>
        <div class="input_mid">Course ID:<input name="cid"  type="text"></div>
        <div class="input_mid">Course:<input name="cname"  type="text"></div>
        <div class="clickbox clearfloat firstbox"><input name="submit" type="submit" value="confirm"></div>
        <div class="redbox clickbox "><input name="reset" type="reset" value="clear"></div>
    </form>
</div>

<div class="resultbox">
    <iframe name="resultbox" frameborder="0" width="100%" height=500px ></iframe>
</div>


</body>
</html>