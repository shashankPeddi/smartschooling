<?php  
 require "init.php";  
 $uname = $_POST["uname"];  
 $pwd =  $_POST["pwd"];  
 $sql_query = "select name from user_info where uname like '$uname' and pwd like '$user_pass';";  
 $result = mysqli_query($con,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {  
 $row = mysqli_fetch_assoc($result);  
 $uname =$row["uname"];  
 echo "Login Success..Welcome ".$uname;  
 }  
 else  
 {   
 echo "Login Failed.......Try Again..";  
 }  
 ?> 