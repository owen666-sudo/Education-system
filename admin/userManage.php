<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
    <title>Account Management >> User Management</title>
</head>
<body>
<h3 class="subtitle">Account Management >> User Management</h3>
<p>Tips：Activate student account or reset student password.</p>
<form action="./fun/getUser.php" method="get" target="resultbox">
    <div class="inputbox"><span>Student ID：</span><input name="sid"  type="text"></div>
    <div class="inputbox"><span>Name：</span><input name="name"  type="text"></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="submit"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
</form>
<iframe name="resultbox" frameborder="0" width="100%" height=600px ></iframe>
</body>
</html>
