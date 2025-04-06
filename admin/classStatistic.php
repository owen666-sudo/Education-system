<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>Course Record</title>
    <script>
        function printresult(){
            document.getElementsByName("resultbox")[0].contentWindow.print();
        }
    </script>
</head>
<body><a style="float:right;margin-right:50px" href="#" onclick="printresult()">print</a>
<h3 class="subtitle">Course Record</h3>
<form action="./fun/classStatistic.php" method="get" target="resultbox">
    <div class="inputbox"><span>Student ID：</span><input name="cid"  type="text"></div>
    <div class="inputbox"><span>Student Name：</span><input name="cname"  type="text"></div>
    <div class="inputbox"><span>Lecturer：</span><input name="tname"  type="text"></div>
    <div class="inputbox"><span>Department：</span>
    <?php
    require_once '../config/database.php';
    echo '<select name="did"><option value="">all</option>';
    $dept=mysqli_query($db,"select did,dname from department");
    while($dr=mysqli_fetch_object($dept)) {
        var_dump($dr);
        echo '<option value="'.$dr->did.'" ';  echo '> '.$dr->dname.'</option>' ;
    }
    echo '</select>';
    mysqli_close($db);
    ?></div>
    <br>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="confirm"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="clear"></div>
</form>

    <iframe name="resultbox" frameborder="0" width="100%" height=550px ></iframe>


</body>
</html>