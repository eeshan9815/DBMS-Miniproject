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
$query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$username=$row['username'];
echo "username: '$username'<br>";
$date_of_birth=$row['date_of_birth'];
echo "date_of_birth: '$date_of_birth'<br>";
$role=$row['role'];
echo "role: '$role'<br>";
$query_mobile = "SELECT * FROM MOBILE_NO_ WHERE email_id='$email'";
$result_mobile = mysqli_query($con, $query_mobile);
while($row_mobile=mysqli_fetch_array($result_mobile,MYSQLI_ASSOC)){
	echo "MOBILE_NO: ".$row_mobile['mobile_no']."<br>";
}

$query_tags = "SELECT * FROM TAGS_ WHERE email_id='$email'";
$result_tags = mysqli_query($con, $query_tags);
while($row_tags=mysqli_fetch_array($result_tags,MYSQLI_ASSOC)){
	echo "TAGS: ".$row_tags['tag']."<br>";
}

$query_location = "SELECT * FROM LOCATION_ WHERE email_id='$email'";
$result_location = mysqli_query($con, $query_location);
while($row_location=mysqli_fetch_array($result_location,MYSQLI_ASSOC)){
	echo "LOCATION: ".$row_location['location']."<br>";
}

$query_skills = "SELECT * FROM SKILLS_ WHERE email_id='$email'";
$result_skills = mysqli_query($con, $query_skills);
while($row_skills=mysqli_fetch_array($result_skills,MYSQLI_ASSOC)){
	echo "SKILLS: ".$row_skills['skill']."<br>";
}

$query_experience = "SELECT * FROM EXPERIENCE_ WHERE email_id='$email'";
$result_experience = mysqli_query($con, $query_experience);
while($row_experience=mysqli_fetch_array($result_experience,MYSQLI_ASSOC)){
	echo "EXPERIENCE: ".$row_experience['role']."<br>";
}

$query_qualification = "SELECT * FROM QUALIFICATION_ WHERE email_id='$email'";
$result_qualification = mysqli_query($con, $query_qualification);
while($row_qualification=mysqli_fetch_array($result_qualification,MYSQLI_ASSOC)){
	echo "QUALIFICATION: ".$row_qualification['degree']."<br>";
}

$query_apply = "SELECT * FROM APPLY_ WHERE email_id='$email'";
$result_apply = mysqli_query($con, $query_apply);
while($row_apply=mysqli_fetch_array($result_apply,MYSQLI_ASSOC)){
	echo "APPLY: ".$row_apply['job_id']."<br>";
}




?>
