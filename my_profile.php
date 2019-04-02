<html>
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
		<h1>Applicant Profile</h1><br><br>
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
$email = $_SESSION['email_id'];
// echo $email;
$query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$username=$row['username'];
echo "<h2>Name: $username<br>";
$date_of_birth=$row['date_of_birth'];
echo "Date Of Birth: $date_of_birth<br>";
$role=$row['role'];
echo "Primary Role: $role<br></h2>";
$query_mobile = "SELECT * FROM MOBILE_NO_ WHERE email_id='$email'";
$result_mobile = mysqli_query($con, $query_mobile);
echo "<br><br><h2>Contact Information</h2><br>";
while($row_mobile=mysqli_fetch_array($result_mobile,MYSQLI_ASSOC)){
	echo "|    ".$row_mobile['mobile_no']."    ";
}

$query_tags = "SELECT * FROM TAGS_ WHERE email_id='$email'";
$result_tags = mysqli_query($con, $query_tags);
echo "|<br><br><h2>Fields of Interest</h2><br>";
while($row_tags=mysqli_fetch_array($result_tags,MYSQLI_ASSOC)){
	echo "|    ".$row_tags['tag']."    ";
}

$query_location = "SELECT * FROM LOCATION_ WHERE email_id='$email'";
$result_location = mysqli_query($con, $query_location);
echo "|<br><br><h2>Location</h2><br>";
while($row_location=mysqli_fetch_array($result_location,MYSQLI_ASSOC)){
	echo "|    ".$row_location['location']."    ";
}

$query_skills = "SELECT * FROM SKILLS_ WHERE email_id='$email'";
$result_skills = mysqli_query($con, $query_skills);
echo "|<br><br><h2>Skills</h2><br>";
while($row_skills=mysqli_fetch_array($result_skills,MYSQLI_ASSOC)){
	echo "|    ".$row_skills['skill']."    ";
}

$query_experience = "SELECT * FROM EXPERIENCE_ WHERE email_id='$email'";
$result_experience = mysqli_query($con, $query_experience);
echo "|<br><br><h2>Experience</h2><br>";
while($row_experience=mysqli_fetch_array($result_experience,MYSQLI_ASSOC)){
	echo "|    ".$row_experience['role']."    ";
}

$query_qualification = "SELECT * FROM QUALIFICATION_ WHERE email_id='$email'";
$result_qualification = mysqli_query($con, $query_qualification);
echo "|<br><br><h2>Qualification</h2><br>";
while($row_qualification=mysqli_fetch_array($result_qualification,MYSQLI_ASSOC)){
	echo "|    ".$row_qualification['degree']."    ";
}

$query_apply = "SELECT * FROM APPLY_ WHERE email_id='$email'";
$result_apply = mysqli_query($con, $query_apply);
echo "|<br><br><h2>Jobs Applied For</h2><br>";
while($row_apply=mysqli_fetch_array($result_apply,MYSQLI_ASSOC)){
	echo "|    ".$row_apply['job_id']."    ";
}
echo "|"




?>

<form action="home.php">
			<button type="submit">Go Back</button>
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