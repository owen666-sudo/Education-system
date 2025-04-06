<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
    <title>Setting >> Reset Password</title>
</head>
<body>
<h3 class="subtitle">Setting >> Reset Password</h3>
<p>Tips：Remember your new password.</p>
<form action="./fun/changePassword.php" method="post" target="resultbox">
    <div class="inputbox"><span>Old Password：</span><input name="oldpass"  type="password"></div>
    <div class="inputbox"><span>New Password：</span><input name="newpass"  type="password"></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
</form>
<iframe name="resultbox" frameborder="0" width="100%" height=600px ></iframe>
</body>
</html>
