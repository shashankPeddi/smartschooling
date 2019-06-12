<?php
    $hostname = "localhost";
    $dbusername = "id8856600_root";
    $dbpassword = "shashank";
    $dbname = "id8856600_smartschooling";

    // Create connection
$conn = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
shashank