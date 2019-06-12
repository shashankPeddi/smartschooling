<!DOCTYPE html>
<html>
<body>

<h2> search Videos</h2>
<p><b>select the below options</b></p>

<form action="test.php" method="post">
  <p><label>select Class:</label><select name="class" required>
    <option value="">None</option>
    <option value="6">6th class</option>
    <option value="7">7th class</option>
    <option value="8">8th class</option>
    <option value="9">9th class</option>
    <option value="10">10th class</option>
  </select></p>
  <br>
  <p><label>select subject:</label><select name="subject" required>
 <option value="">None</option>
    <option value="Telugu">Telugu</option>
    <option value="Hindi">Hindi</option>
    <option value="English">English</option>
    <option value="Maths">Maths</option>
    <option value="physis">physis</option>
    <option value="Biology">Biology</option>
    <option value="Social">Social</option>
  </select></p>
  <br>
  <p><label>select chapter</label><select name="chapter" required>
  <option value="">None</option>
    <option value="chapter1">chapter 1</option>
    <option value="chapter2">chapter 2</option>
    <option value="chapter3">chapter 3</option>
    <option value="chapter4">chapter 4</option>
    <option value="chapter5">chapter 5</option>
    <option value="chapter6">chapter 6</option>
    <option value="chapter7">chapter 7</option>
  </select></p>
  <br>
  <p><label>select unit:</label><select name="unit" required>
  <option value="">None</option>
    <option value="unit1">Unit 1</option>
    <option value="unit2">Unit 2</option>
    <option value="unit3">Unit 3</option>
    <option value="unit4">Unit 4</option>
    <option value="unit5">Unit 5</option>
    <option value="unit6">Unit 6</option>
    <option value="unit7">Unit 7</option>
  </select></p>
 <br>
  <button type="submit" name="submit">submit</button>
</form>

</body>
<?php
include_once 'db.php';
 //require "init.php";  
 if(isset($_POST['submit']))
 {
 $chapter = $_POST["chapter"];  
 $class =  $_POST["class"];
 $unit=$_POST["unit"];  
 $sql_query = "SELECT vplink FROM  videos  WHERE chapter='$chapter' AND subject='$subject' AND class='$class' AND unit='$unit'";  

session_start();
$result = mysqli_query($conn,$sql_query);
while ($row = $result->fetch_assoc()) {
    
    $_SESSION["link"]=$row['name'];
    $ses=$_SESSION["favcolor"]
    echo "Favorite color is " . $_SESSION["link"] . ".<br>";
}








}
?>
</html>