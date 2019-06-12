<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>video lectures</title>
<style>
*{
	padding: 0;
	margin: 0;
}

html, body{
	height:100%;
	box-sizing: border-box;
	background-color:beige;
}

.wrapper{
	background-color:#eee;
	height:100%;
}

/*.heading{
	height:100px;
	padding:10px;
	text-align: center;
	font-size: 35px;
	line-height: 2.5;
	font-family: big john;
	color:#eee;
	background:linear-gradient(black, #1a285a);
}*/

h2{
	padding: 20px;
	text-align: center;
	font-family: verdana;
	font-size: 18px;
	background-color:#eee;
	color:darkred;
	text-transform: capitalize;
}

.video{
	position:absolute;
	top:25%;
	left:25%;
	text-align: center;
	padding:10px;
}

.content{
	padding: 10px;
	text-align: center;
	font-size:17px;
	font-family: verdana;
}

.videoFrame{
	border: 2px solid black;
	box-shadow: 1px 1px 10px black;
}
body{
  font-family:"Arial", Serif;
  background-color:#f4f4f4;
  overflow-x:hidden;
}


.navbar a{
  float:left;
  display:block;
  color:#f2f2f2;
  text-align:center;
  padding:14px 16px;
  text-decoration:none;
  font-size:17px;
}

.navbar ul{
  margin:8px 0 0 0;
  list-style:none;
}

.navbar a:hover{
  background-color:#ddd;
  color:#000;
}

.side-nav{
  height:100%;
  width:0;
  position:fixed;
  z-index:1;
  top:0;
  left:0;
  background-color:#111;
  opacity:0.9;
  overflow-x:hidden;
  padding-top:60px;
  transition:0.5s;
}

.side-nav a{
  padding:10px 10px 10px 30px;
  text-decoration:none;
  font-size:22px;
  color:#ccc;
  display:block;
  transition:0.3s;
}

.side-nav a:hover{
  color:#fff;
}

.side-nav .btn-close{
  position:absolute;
  top:0;
  right:22px;
  font-size:36px;
  margin-left:50px;
}

#main{
  transition:margin-left 0.5s;
  padding:20px;
  overflow:hidden;
  width:100%;
}

@media(max-width:568px){
  .navbar-nav{display:none}
}

@media(min-width:568px){
  /*.open-slide{display:none}*/
}

</style>
</head>
<body>
	
<div class="wrapper">
		<div class="video">
		<iframe src="https://drive.google.com/file/d/1ObefHHSyFT0VeZkNDv0Uc6FqOTAZ2SiT/preview" width="640" height="320"></iframe>
		</div>
		<div class="download"><a href="https://drive.google.com/file/d/1ObefHHSyFT0VeZkNDv0Uc6FqOTAZ2SiT/view?usp=sharing"><img src="download.gif"></a>
	</div>
     <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
        </svg>
      </a>
    </span>

    
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="homepage.php">Home</a>
    <a href="video.php">Videos</a>
    <a href="#">pdf's</a>
    <a href="#">textbooks</a>
  </div>

  <div id="main">
    <h1>TEXTBOOKS</h1>
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
	</body>
</html>