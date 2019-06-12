<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".hamburger-btn .fa-times").hide();

    $(".hamburger-btn .fa-bars").click(function(){
      $(this).hide();
      $(".hamburger-btn .fa-times").show();
      $(".mob ul").addClass("active");
    });

    $(".hamburger-btn .fa-times").click(function(){
      $(this).hide();
      $(".hamburger-btn .fa-bars").show();
      $(".mob ul").removeClass("active");
    });
    });
@import url('https://fonts.googleapis.com/css?family=Roboto');
 
* {
  margin: 0;
  padding: 0;
  user-select: none;
}
 
body {
  font-family: "roboto", sans-serif;
}
 
.container nav.desk,
.container nav.mob{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: #364a4b;
  height: 60px;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14);
}
 
nav.desk ul {
  list-style: none;
  </script>
</head>
<body>
  


<div class="container">
  <nav class="desk">
    <ul>
      <li class="active"><a href="videounits.php">telugu</a></li>
      <li><a href="#">hindi</a></li>
      <li><a href="#">english</a></1li>
      <li><a href="#">maths</a></li>
      <li><a href="#">physis</a></li>
      <li><a href="#">social</a></li>
   </ul>
  </nav>
  
  <nav class="mob">
    <div class="hamburger-btn">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    
  </nav>

  <div class="header">
  </div>

</div> 


</body>
</html>