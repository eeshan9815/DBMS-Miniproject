<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
require_once 'dbconnect.php';
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

$password = md5($password);
echo $_POST['radio'];
if($_POST['radio'] == "Applicant")
{
	$query = "SELECT * FROM APPLICANT_ WHERE email_id='$email' AND password='$password'";	
	$result = mysqli_query($con, $query);
	$row=mysqli_fetch_array($result);
	$_SESSION['email_id'] = $email;
	$numResults = mysqli_num_rows($result);
	if($numResults == 1)
	{
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\" />";
	}
	else
	{
		echo "<br><br><br><center><h1>Invalid credentials!</h1></center>";
		echo "<br><center><a href = \"index.php\">Go back</a></center>";	
	}
}
else
{
	$query = "SELECT * FROM ORGANIZATION_ WHERE email_id='$email' AND password='$password'";	
	$result = mysqli_query($con, $query);
	$row=mysqli_fetch_array($result);
	$_SESSION['email_id'] = $email;
	$numResults = mysqli_num_rows($result);
	if($numResults == 1)
	{
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=org_home.php\" />";
	}
	else
	{
		echo "<br><br><br><center><h1>Invalid credentials!</h1></center>";
		echo "<br><center><a href = \"index.php\">Go back</a></center>";	
	}
}
?>
