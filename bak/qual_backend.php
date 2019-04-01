<?php
require_once 'dbconnect.php';
session_start();
$degree = $_POST["degree"];
$field = $_POST["field"];
$temp = " in ";
$degree = $degree.$temp.$field;
$year = (is_numeric($_POST['year']) ? (int)$_POST['year'] : 0);
$grade = (is_numeric($_POST['grade']) ? (float)$_POST['grade'] : 0);
$institute  = $_POST["institute"];
$email = $_SESSION['email_id'];

$query = "INSERT INTO QUALIFICATION_ VALUES('$email', '$degree', '$grade', '$institute', '$year')";

// echo $years;
$result = mysqli_query($con, $query);

echo "<br><br><br><center><h1>Qualification Updated!</h1></center>";
echo "<br><center><a href = \"home.php\">Go back</a></center>";

?>