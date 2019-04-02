<html>
    <head>
        <meta charset="UTF-8">
        <title>Applicant Profile</title>
        
        
        
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
// $email = $_SESSION['email_id'];
$email = $_POST["email"];
// echo $email;
$query = "SELECT * FROM APPLICANT_ WHERE email_id=$email";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$username=$row['username'];
echo "Name: $username<br>";
$date_of_birth=$row['date_of_birth'];
echo "Date Of Birth: $date_of_birth<br>";
$role=$row['role'];
echo "Primary Role: $role<br>";
$query_mobile = "SELECT * FROM MOBILE_NO_ WHERE email_id=$email";
$result_mobile = mysqli_query($con, $query_mobile);
while($row_mobile=mysqli_fetch_array($result_mobile,MYSQLI_ASSOC)){
	echo "Contact Information: ".$row_mobile['mobile_no']."<br>";
}

$query_tags = "SELECT * FROM TAGS_ WHERE email_id=$email";
$result_tags = mysqli_query($con, $query_tags);
while($row_tags=mysqli_fetch_array($result_tags,MYSQLI_ASSOC)){
	echo "Fields of Interest: ".$row_tags['tag']."<br>";
}

$query_location = "SELECT * FROM LOCATION_ WHERE email_id=$email";
$result_location = mysqli_query($con, $query_location);
while($row_location=mysqli_fetch_array($result_location,MYSQLI_ASSOC)){
	echo "Location: ".$row_location['location']."<br>";
}

$query_skills = "SELECT * FROM SKILLS_ WHERE email_id=$email";
$result_skills = mysqli_query($con, $query_skills);
while($row_skills=mysqli_fetch_array($result_skills,MYSQLI_ASSOC)){
	echo "Skills: ".$row_skills['skill']."<br>";
}

$query_experience = "SELECT * FROM EXPERIENCE_ WHERE email_id=$email";
$result_experience = mysqli_query($con, $query_experience);
while($row_experience=mysqli_fetch_array($result_experience,MYSQLI_ASSOC)){
	echo "Experience: ".$row_experience['role']."<br>";
}

$query_qualification = "SELECT * FROM QUALIFICATION_ WHERE email_id=$email";
$result_qualification = mysqli_query($con, $query_qualification);
while($row_qualification=mysqli_fetch_array($result_qualification,MYSQLI_ASSOC)){
	echo "Qualification: ".$row_qualification['degree']."<br>";
}

$query_apply = "SELECT * FROM APPLY_ WHERE email_id=$email";
$result_apply = mysqli_query($con, $query_apply);
while($row_apply=mysqli_fetch_array($result_apply,MYSQLI_ASSOC)){
	echo "Jobs Applied For: ".$row_apply['job_id']."<br>";
}




?>

<form action="org_home.php">
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