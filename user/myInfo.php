<?php
session_start();
$sid=$_SESSION["user"];
require_once("../config/database.php");

$com="select * from student natural join (select did,dname from department) as didname where sid='$sid' ";

$result=mysqli_query($db,$com);

if($result){
    while($row=mysqli_fetch_object($result)){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./user.css">
    <title>Result</title>
</head>
<body>
<h3 class="subtitle">Information</h3>

        <div class="inputbox"><span>ID：</span><input name="sid" type="text" required value="<?php echo $row->sid ?>"></div>
        <div class="inputbox"><span>Name：</span><input name="name" type="text" required value="<?php echo $row->name ?>"></div>
        <div class="inputbox"><span>Sex：</span>
            <select name="sex" required>
                <option value="male" <?php  if($row->sex=='male') echo "selected"; ?>>male</option>
                <option value="female" <?php  if($row->sex=='female') echo "selected"; ?>>female</option>
            </select></div>
        <div class="inputbox"><span>Age：</span><input name="age" type="text" required value="<?php echo $row->age ?>"></div>
        <div class="inputbox"><span>Class：</span><input name="class" type="text" required value="<?php echo $row->class ?>"></div>
        <div class="inputbox" style="display: flex; align-items: center; gap: 5px;"><span>Department：</span>
            <?php
            echo '<select required name="did">';
            $dept=mysqli_query($db,"select did,dname from department");
            while($dr=mysqli_fetch_object($dept)) {
                var_dump($dr);
            echo '<option value="'.$dr->did.'" '; if($dr->dname==$row->dname) echo 'selected'; echo '> '.$dr->dname.'</option>' ;
            }
            echo '</select>';
            ?></div>
            
        
        <?php
    }
}
mysqli_close($db);
?>
