<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>Title</title>
</head>
<body>
<form action="./fun/getLog.php" method="get" target="resultbox">
    <h3 class="subtitle">Student Management >> Assignment Management</h3>
    <div class="inputbox"><span>Student ID：</span><input name="sid" type="text"></div>
    <div class="inputbox"><span>Name：</span><input name="name" type="text"></div>
    
    <div class="clickbox clearfloat"><input name="submit" type="submit" value="confirm"></div>
    <div class="clickbox"><a href="./addLog.php">add</a></div>
    

</form>

<iframe name="resultbox" frameborder="0" width="100%" height=690px ></iframe>
</body>
</html>