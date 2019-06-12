<?php
include_once 'db.php';
 //require "init.php";  
 if(isset($_POST['submit']))
 {
 $chapter = $_POST["chapter"];  
 $class =  $_POST["class"];
 $unit=$_POST["unit"];  
 $sql_query = "SELECT vplink FROM  videos  WHERE chapter='$chapter' AND class='$class' AND unit='$unit'";  
 $result = mysqli_query($conn,$sql_query);
 while($row=$result->fetch_assoc())
 {
 echo  $row["vplink"];
 }
 }
?>