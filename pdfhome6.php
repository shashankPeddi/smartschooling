<!DOCTYPE html>
<html>
<head>
      <title>Smart education</title>
<style>
look{
margin:0;
padding:0;
}
header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("sai.jpg");
height: 100vh;
background-size:cover;
background-position: center; 
}
ul{
float:right;
list-style-type:none;
margin-top:25px;
} 
ul li{
display:inline-block; 
}
ul li a{
text-decoration:none;
color:#fff;
padding:5px 20px;
border:1px solid transparent;
transition: 0.6s ease;
}
ul li a:hover{
background-color:orange;
color:red;
}  
ul li.active a{
background-color:orange;
color:red;
}  

.logo img{
float:left;
width:150px;
height:auto;
}
.main{
max-width:1200px;
margin:auto;
}
.table{
	position:absolute;
	top:300px;
	right:1000px;
	
	
}
.block{
	display:block;
	width: 100%;
}


</style>
</head>
<div id="look">
<header>
       <div class="main">
          <div class="logo">
		<img src="logo.png">
	  </div>
	   <ul>
		<li class="active"><a href="homepage.php">HOME</a></li>
		<li><a href="video.php">VIDEOS</a></li>
		<li><a href="class.php">PDF'S</a></li>
		<li><a href="#">SYLLABUS</a></li>
	   </ul>
	</div>
<div class="table"><table border="2px" width="300">
<tr><td><button type="button" class="block"><a href="https://drive.google.com/file/d/1NjKHcG7D8j8ZpYD_CX6P8A9zYNuq0HRD/view?usp=sharing">Telugu</a></button></td></tr>
<tr><td><button  type="button" class="block"><a href="homepage.php">Hindi</a></button></td></tr>
<tr><td><button  type="button" class="block"><a href="homepage.php">English</a></button></td></tr>
<tr><td><button  type="button" class="block"><a href="homepage.php">maths</a></button></td></tr>
<tr><td><button  type="button" class="block"><a href="https://drive.google.com/file/d/1XSYtj67C_ZJAL43VhbmxUTS1p7kD0Dq-/view?usp=sharing">physis</a></button></td></tr>
<tr><td><button  type="button" class="block"><a href="https://drive.google.com/file/d/1KP2VfHo5yfVxUqjJTrZCRhsEX_4mtN4t/view?usp=sharing">Biology</a></button></td></tr>
<tr><td><button  type="button" class="block"><a href="#">Social</a></button></td></tr>
</table></div>
</header>
</html>			