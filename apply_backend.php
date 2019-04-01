<html>
<head>
	<meta charset="UTF-8">
	<title>Applied</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
        <h3></h3><br><br>
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
$job_id=$_POST['job_id'];
$proposal=$_POST['proposal'];
$email = $_SESSION['email_id'];
// $query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$query = "INSERT INTO APPLY_ VALUES('$email', $job_id,'".date("Y-m-d")."', '$proposal')";    //TODO: Explicit check only single applciaiton
mysqli_query($con, $query) ;

echo "<br><br><br><center><h1>Applied!</h1></center>";

?>

<form action="home.php">
			<button type="submit">Simon Go Back</button>
        </form>
				</div>                                 
		
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	</center>
</body>
</html>