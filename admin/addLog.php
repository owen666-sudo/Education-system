<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>Title</title>
</head>
<body>
<h3>Add Assignment</h3>
<form style="margin:30px;"action="./fun/addLog.php" method="post" id="log">

    <span>Student ID：</span><input name="sid" required type="text" style="width:180px"><br>
    <br>
    
    <span>Course：</span><input name="reason"required  type="text" class="boxwidth"><br>
    <br>
    <span>Assignment：</span><br><textarea style="display:block;width:90%;height:60px;"name="detail" required form="log"></textarea><br>
    <input name="submit" type="submit" value="confirm"><br>
</form>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">return</a></div> </div>
</body>
</html>