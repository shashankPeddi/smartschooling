<!DOCTYPE html>
<html>

<head>
<style>
.body{
   
    height: 100vh;
}
#search{
  border-radius: 35%;
  background-color: red; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
</style>
</head>
<center><body background="sai.jpg">
<b><h1 style="color:white;"> search Videos</h1></b>
<p><b><h2 style="color:white;">select the below options</h2></b></p>

<form action="video.php" method="post">
  <p><label style="font-size:30px;color:black;">Class:</label><br><select name="class" required>
    <option value="">None</option>
    <option value="6">6th class</option>
    <option value="7">7th class</option>
    <option value="8">8th class</option>
    <option value="9">9th class</option>
    <option value="10">10th class</option>
  </select></p>
  <br>
  <p><label style="font-size:30px;color:black;">subject:</label><br><select name="subject" required>
 <<option value="">None</option>
    <option value="telugu">Telugu</option>
    <option value="hindi">Hindi</option>
    <option value="english">English</option>
    <option value="maths">Maths</option>
    <option value="physics">physics</option>
    <option value="biology">Biology</option>
    <option value="social">Social</option>
  </select></p>
  <br>
  <p><label style="font-size:30px;color:black;">Chapter</label><br><select name="chapter" required>
  <option value="">None</option>
    <option value="chapter1">chapter 1</option>
    <option value="chapter2">chapter 2</option>
    <option value="chapter3">chapter 3</option>
    <option value="chapter4">chapter 4</option>
    <option value="chapter5">chapter 5</option>
    <option value="chapter6">chapter 6</option>
    <option value="chapter7">chapter 7</option>
    <option value="chapter8">chapter 8</option>
    <option value="chapter9">chapter 9</option>
    <option value="chapter10">chapter 10</option>
  </select></p>
  <br>
  <p><label style="font-size:30px;color:black";>Unit:</label><br><select name="unit" required>
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
  <input type="submit" id="search" name="submit" value="Submit">
</form>

</body>
</center>
</html>