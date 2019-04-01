<?php
require_once 'dbconnect.php';
session_start();
$tag = $_POST["tag"];
$skill = $_POST["skill"];
$email = $_SESSION['email_id'];

$query = "INSERT INTO SKILLS_ VALUES('$email', '$tag', '$skill')";

// echo $years;
$result = mysqli_query($con, $query);

echo "<br><br><br><center><h1>Skill Added!</h1></center>";
echo "<br><center><a href = \"home.php\">Go back</a></center>";

?>