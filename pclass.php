<html>
<head>
<style>
.button{border-radius: 50%;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointerbackground-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer
  }
a{
  text-decoration: none;
}
div{
  position:absolute;
	bottom: 275px;
  top:00px;
  left:20px;
  right: 20px;
}
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
ul,li{
display:inline-block; 
}
ul,li,a{
text-decoration:none;
color:#fff;
padding:5px 20px;
border:1px solid transparent;
transition: 0.6s ease;
}
ul,li,a:hover{
background-color:orange;
color:red;
}  
ul,li.active,a{
background-color:orange;
color:red;
}  

.logo{
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

div.home{
  width:50%;
  height:10%;
}
.classbutton{
  position:absolute;
  top:300px;
  left:80;
}
</style>
</head>
<div id="look">
<header>
       <div class="main">
          <div class="logo">
		<img src="logo.png">
	   <div  class="home" style="width:50px;height:20px; background:gray; margin:20px">
	   <ul>
		<li class="active"><a href="homepage.php">HOME</a></li>
		<li><a href="vclass.php">VIDEOS</a></li>
		<li><a href="pclass.php">PDF'S</a></li>
		<li><a href="#">SYLLABUS</a></li>
	   </ul>
	</div>
  </div>
  </div>
  </header>
<center><div><body>
<button class="button"><a href="pdfhome6.php">6th class</a></button> 
<button class="button"><a href="pdfhome7.php">7th class</a></button>
<button class="button"><a href="pdfhome8.php">8th class</a></button>
<button class="button"><a href="pdfhome9.php">9th class</a></button>
<button class="button"><a href="pdfhome.php">10th class</a></button>
</body></div></center>
</html>