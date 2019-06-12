<html>
<body>
<table>
<tr>
<td>vlink:</td>
<td><input type="text" name="vlink" ></td>
</tr>
<tr>
<td>vplink:</td>
<td><input type="text" name="vplink"></td>
</tr>
<tr>
<td>dvlink:</td>
<td><input type="text" name="vdlink"></td>
</tr>
<tr><td><input type="submit" name="save" value="Save Link"></td></tr>
</table>
</body>
<?php
include_once 'db.php';
if(isset($_POST['save'])){
    $vname = $_POST['vname'];
    $vplink = $_POST['vplink'];
    $vdlink = $_POST['vdlink'];
    //echo "$name,$email,$pwd,$cpwd,$phno";

    $sql = "INSERT INTO `registration` (`vname`, `vplink`, `vdlink') VALUES ('$vname', '$vplink', '$vdlink')";
    if (mysqli_query($conn, $sql)) {
        echo "<div class='error'>New link stored successfully</div>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
</html>
