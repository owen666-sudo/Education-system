<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
</head>
<body>
    <h3>Assignment Upload</h3>
<form style="margin:30px;"action="./addLogFunc.php" method="post" id="log">

    
    <br>
    <span>Course Name：</span><input name="reason"required  type="text" class="boxwidth">
    <br>
    <span>Assignment：</span><br><textarea style="display:block;width:90%;height:60px;"name="detail" required form="log"></textarea><br>
    <span></span><input name="submit" type="submit" value="submit"><br>
</form>
</body>
</html>