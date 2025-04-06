<?php
session_start();
$sid=$_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./user.css">
    <title>Change Password</title>
</head>
<body>
<h3 class="subtitle">Change Password</h3>
<p>Attention：New password for next time，remember your new password.</p>
<form action="./changePassword.php" method="post" target="resultbox">
    <div class="inputbox"><span>Old password：</span><input name="oldpass"  type="password"></div>
    <div class="inputbox"><span>New password：</span><input name="newpass"  type="password"></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
</form>
<iframe name="resultbox" frameborder="0" width="100%" height=200px ></iframe>
</body>
</html>
