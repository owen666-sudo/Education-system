<?php

require_once("../../config/database.php");
$did=$_GET["did"];
$mname=$_GET["mname"];
$com="insert into major (did,mname) values('$did','$mname') " ;

$result=mysqli_query($db,$com);
if($result){
    echo '<h4 style="margin:30px;">Tips：Data updated successfully.</h4>';
}
else{
    echo '<h4 style="margin:30px;">Attention：Data updated failed.</h4>';
}

mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">return</a></div> </div>
