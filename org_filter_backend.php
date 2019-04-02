<html>
<head>
	<meta charset="UTF-8">
	<title>Candidate Search Results</title>
	
	
	
		<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<br><br>
	<center>
		<div class="wrapper">
		<div class="container">
		<h3>Candidate Search Results</h3><br><br>
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
$name = $_POST["name"];
$role = $_POST["role"];
$tag = $_POST["tag"];
$location = $_POST["location"];
$qual = $_POST["degree"];
$skill = $_POST["skill"];
$org_reg = $_SESSION['email_id'];
// if(empty(trim($exp_years))){
// 	$exp_years='0';
// }
// echo $qual;
if($qual == "None")
{
    $qual = "";
}
if($tag == "None")
{
    $qual = "";
}
if($skill == "None")
{
    $qual = "";
}
// $query = "SELECT * FROM APPLICANT_ WHERE email_id='$email'";
$query = "SELECT * FROM APPLICANT_, TAGS_, LOCATION_, QUALIFICATION_, SKILLS_ WHERE APPLICANT_.email_id = TAGS_.email_id AND APPLICANT_.email_id = LOCATION_.email_id AND APPLICANT_.email_id = QUALIFICATION_.email_id AND APPLICANT_.email_id = SKILLS_.email_id AND APPLICANT_.username LIKE '%".$name."%' AND APPLICANT_.role LIKE '%".$role."%' AND TAGS_.tag LIKE '%".$tag."%' AND LOCATION_.location LIKE '%".$location."%' AND QUALIFICATION_.degree LIKE '%".$qual."%' AND SKILLS_.skill LIKE '%".$skill."%'";
$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);
// echo $years;
if($numResults == 0){
	echo "<br><br><br><center><h1>No candidates found matching given criteria.</h1></center>";
}
else{
	// echo"	<html>
	// <head>
	// 	<meta charset=\"UTF-8\">
	// 	<title>Login Page</title>
		
		
		
	// 		<link rel=\"stylesheet\" href=\"css/style.css\">
	
		
	// </head>
	
	
	// <body>
	// <br><br>
	// <div class=\"wrapper\">
	// 		<div class=\"container\">";
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
                $email_applicant = $row['email_id'];
                $query2 = "SELECT * FROM APPLICANT_ WHERE email_id = '".$row['email_id']."'";	//TODO: Sorting
                $query_result2 = mysqli_query($con, $query2);
                $result2 = mysqli_fetch_array($query_result2, MYSQLI_ASSOC);
                // echo "Job ID: ".$row['job_id']."<br>";
                echo "Role: ".$row['role']."<br>";
                echo "Tag: ".$row['tag']."<br>";
                echo "Location: ".$row['location']."<br>";
                // echo "Experience Required: ".$row['exp_req']."<br>";
                // echo "Opened on: ".$row['open_date']."<br>";
                // echo "Closed on: ".$row['close_date']."<br>";
                // echo "Apply Date: ".$row['apply_date']."<br>";
                // echo "Cover Letter: ".$row['message']."<br>";
                echo "<form class=\"form\" action = \"applicant_profile.php\" method = \"POST\">";
                echo "<button name=\"email\" value=\"'$email_applicant'\">Click to see profile</button>";
                echo "</form>";
                // <form class="form" action = "login-backend.php" method = "POST">
                // <input name = "email" placeholder = "Email/Registration ID"><br><br>
                // <input name = "password" type = "password" placeholder = "Password"><br><br>
                // Appplicant:<input type="radio" name="radio" value="Applicant">
                // Organization:<input type="radio" name="radio" value="Organization"><br><br>
                // <button type = "submit">Submit</button>
                // </form>
                echo "<br><br>";
                } 
// 	echo"			</div>
			
// 	<ul class=\"bg-bubbles\">
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 		<li></li>
// 	</ul>
// </div>
// </center>
// </body>
// </html>";
}
// echo $years;

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