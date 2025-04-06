<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>Student Management >> View Student</title>
</head>
<body>
<h3 class="subtitle">Student Management >> View Student</h3>
<form action="./fun/getStudent.php" method="post" target="resultbox">
    <div class="inputbox"><span>ID：</span><input name="sid"  type="text"></div>
    <div class="inputbox"><span>Name：</span><input name="name"  type="text"></div>
    <div class="inputbox"><span>Sex：</span>
        <select  name="sex">
            <option value="">unknown</option>
            <option value="male">male</option>
            <option value="female">female</option>
        </select></div>
    <div class="inputbox"><span>Age：</span><input name="age"  type="text"></div>
    <div class="inputbox"><span>Class：</span><input name="class"  type="text"></div>
    <div class="inputbox"><span>Department：</span><input name="dname"  type="text"></div>
    
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
</form>
<iframe name="resultbox" frameborder="0" width="100%" height="500px" ></iframe>

</body>
</html>