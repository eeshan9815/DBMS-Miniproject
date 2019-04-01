<?php


/*$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
require_once 'dbconnect.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$password = md5($password);
if($_POST['radio'] == "Applicant")
{
	$query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);

	if($numResults == 1)
	{
		echo "<br><br><br><center><h1>Already registered!</h1></center>";
		echo "<br><center><a href = \"index.php\">Go back</a></center>";

		// sleep(4);
	}
	else
	{
		$query = "INSERT INTO APPLICANT_ (email_id, password, username) VALUES ('$email', '$password', '$name')";
		mysqli_query($con, $query);
		echo "<br><br><br><center><h1>Signup Complete</h1></center>";
		echo "<br><center><a href = \"index.php\">Go back</a></center>";
		
	}
}
else
{
	$query = "SELECT * FROM ORGANIZATION_ WHERE email_id='$email'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);

	if($numResults == 1)
	{
		echo "<br><br><br><center><h1>Already registered!</h1></center>";
		echo "<br><center><a href = \"index.php\">Go back</a></center>";

		// sleep(4);
	}
	else
	{
		$query = "INSERT INTO ORGANIZATION_ (email_id, password, org_name) VALUES ('$email', '$password', '$name')";
		mysqli_query($con, $query);
		echo "<br><br><br><center><h1>Signup Complete</h1></center>";
		echo "<br><center><a href = \"index.php\">Go back</a></center>";
		
	}
}
	
?>

